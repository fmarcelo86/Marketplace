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
                <div class="col-md-8 mx-auto">
                  <!-- general form elements -->
                  <div class="card card-primary ">
                    <div class="card-header">
                      <h5 class="card-title">Datos personales</h5>
                      <h6 class="text-muted importante"></h6>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <form role="form block" action="{{route('save', $product)}}" method="POST">
                        @csrf
                        <div class="card-body">

                          <div class="d-block mb-1">
                            <input type="text" class="form-control" placeholder="Nombre" name="customer_name" />
                            @error('customer_name')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                          </div>

                          <div class="d-block mb-1">
                            <input type="text" class="form-control" placeholder="Email" name="customer_email" />
                            @error('customer_email')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                          </div>

                          <div class="d-block mb-1">
                              <input type="text" class="form-control" placeholder="Celular" name="customer_mobile" />
                              @error('customer_mobile')
                                <small class="text-danger">*{{$message}}</small>
                            @enderror
                          </div>

                          <div class="d-flex" style="padding-top: 5px">
                                <button type="submit" class="btn btn-primary btn-sm ml-auto">Confirmar</button>
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
