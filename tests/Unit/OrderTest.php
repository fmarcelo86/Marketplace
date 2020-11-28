<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testCreateOrderTest() {
        $order = new Order();
        $this->assertNotNull($order);
    }

    public function testCreateProductTest() {
        $product = new Product();
        $this->assertNotNull($product);
    }
}
