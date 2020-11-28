<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrder;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product) {
        $order = new Order();
        return view('order', compact('product', 'order'));
    }

    public function clientData(Product $product) {
        return view('client', compact('product'));
    }

    public function save(StoreOrder $request, Product $product) {
        $order = Order::create($request->all());
        return view('order', compact('product', 'order'));
    }

    public function orders() {
        $orders = Order::all();
        return view('admin', compact('orders'));
    }

    public function pay(Product $product, Order $order) {
        $body = $this->buildBodyPay($product, $order);
        $response = Http::post(env('SERVICE_HOST'), $body);

        if($response->ok()) {
            $respBody = json_decode($response->body());
            if($respBody->status->status == "OK") {
                $order->request_id = $respBody->requestId;
                $order->update();
                return Redirect::to($respBody->processUrl);
            }
        }
        return view('order', compact('product', 'order'));
    }

    public function update(Request $request, Product $product, Order $order) {
        $body = $this->buildBodyQuery();
        $response = Http::post(env('SERVICE_HOST').$order->request_id, $body);
        if($response->ok()) {
            $respBody = json_decode($response->body());
            if($respBody->status->status == "APPROVED") {
                $order->status = 'PAYED';
            } else {
                $order->status = 'REJECTED';
            }
            $order->update();
        }
        return view('order', compact('product', 'order'));
    }

    private function getNonceTranKey() {
        $seed = date('c');
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }
        $nonceBase64 = base64_encode($nonce);
        $tranKey = base64_encode(sha1($nonce . $seed . env('SERVICE_TRAN_KEY'), true));
        return [
            "seed" => $seed,
            "nonce" => $nonceBase64,
            "tranKey" => $tranKey
        ];
    }

    private function buildBodyQuery() {
        $nonceTranKey = $this->getNonceTranKey();
        return [
            "auth" => [
                "login" => env('SERVICE_LOGIN'),
                "tranKey" => $nonceTranKey['tranKey'],
                "nonce" =>  $nonceTranKey['nonce'],
                "seed" => $nonceTranKey['seed']
            ]
        ];
    }

    private function buildBodyPay(Product $product, Order $order) {
        $nonceTranKey = $this->getNonceTranKey();
        return [
            "auth" => [
                "login" => env('SERVICE_LOGIN'),
                "tranKey" => $nonceTranKey['tranKey'],
                "nonce" =>  $nonceTranKey['nonce'],
                "seed" => $nonceTranKey['seed']
            ],
            "payment" => [
                "reference" => $product->id,
                "description" => "Pago básico",
                "amount" => [
                    "currency" => "COP",
                    "total" => $product->price
                ]
            ],
            "expiration" => date('c', strtotime('+1 hour')),
            "returnUrl" => "http://127.0.0.1:8000/order/".$product->id."/".$order->id,
            "ipAddress" => "127.0.0.1",
            "userAgent" => "PlacetoPay Sandbox"
        ];
    }
}
