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
                  <div class="col-md-12 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-primary ">
                      <div class="card-header">
                        <h5 class="card-title">Lista de ordenes</h5>
                        <h6 class="text-muted importante"></h6>
                      </div>

                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->customer_name}}</td>
                                    <td>{{$order->customer_email}}</td>
                                    <td>{{$order->customer_mobile}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>

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
