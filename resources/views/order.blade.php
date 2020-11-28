<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Marketpace</title>
  </head>
  <body>

    <div class="container d-flex h-100">
      <div class="row align-self-center w-100">
          <div class="col-12 mx-auto">

            <div class="row">
                <!-- left column -->
                <div class="col-md-6 mx-auto">

                    @if ($order->status === 'PAYED')
                        <div class="alert alert-success" role="alert">
                            Pago exitoso
                        </div>
                    @elseif ($order->status != null)
                        <div class="alert alert-warning" role="alert">
                            Pago rechazado, Inténtelo nuevamente
                        </div>
                    @endif
                  <!-- general form elements -->
                  <div class="card card-primary ">
                    <div class="card-header">
                        @if ($order->status === null)
                            <h5 class="card-title">Detalles del pago</h5>
                        @else
                            <h5 class="card-title">Estado transacción</h5>
                        @endif
                      <h6 class="text-muted importante"></h6>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <form role="form" action="{{route('pay', [$product, $order])}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="card-body">

                          <div class="input-group mb-3">
                            <span class="badge">Nombre: {{$order->customer_name}}</span>
                          </div>

                          <div class="input-group mb-3">
                            <span class="badge">Celular: {{$order->customer_mobile}}</span>
                          </div>

                          <div class="input-group mb-3">
                            <span class="badge">Email: {{$order->customer_email}}</span>
                          </div>

                          <div class="input-group mb-3">
                            <span class="badge">Prducto: {{$product->name}}</span>
                          </div>

                          <div class="input-group mb-3">
                            <span class="badge">Precio: @money($product->price)</span>
                          </div>

                          <div class="d-flex" style="padding-top: 5px">
                                <span class="badge badge-success">Total a pagar: @money($product->price)</span>
                                @if ($order->status === null)
                                    <button type="submit" class="btn btn-primary btn-sm ml-auto">Pagar</button>
                                @elseif ($order->status === 'PAYED')
                                    <a href="{{route('home')}}" disabled class="btn btn-primary btn-sm ml-auto">Regresar</a>
                                @else
                                    <button type="submit" class="btn btn-primary btn-sm ml-auto">Reintentar pago</button>
                                @endif
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>


          </div>
      </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
