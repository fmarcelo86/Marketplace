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
    <a href="{{ route('orders') }}" class="btn btn-primary btn-sm ml-auto float-right" style="margin: 10px">Ver todas las Ordenes</a>
    <div class="container d-flex h-100">
      <div class="row align-self-center w-100">
          <div class="col-3 mx-auto">
              <div class="card">
                <a href="#"><img class="card-img-top" src="{{$product->image}}" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <h6>@money($product->price)</h6>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <a href="{{ route('client', $product) }}" class="btn btn-outline-success btn-sm">Comprar</a>
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
