@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
@endif




<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Archivos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;  
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;

            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }

            .content {

                text-align: center;
                
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                
                
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                
                <form class="form-horizontal" role="form" method="POST" action="/archivos" enctype="multipart/form-data">

                 {{ csrf_field() }}
                    <br>    
                  <h1>Editar archivos</h1>


        <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label"><h3>Descripción<h3></label>
        <div class="col-sm-10">
      <input type="text" class="form-control" name="descripcion" placeholder="Digite el título">

        @if($errors->has('titulo'))
        <span style="color:red;"> {{ $errors->first('titulo') }} </span>
         @endif

    </div>

  </div>

                
                <br>
      <div class="form-group">
        <label for="direccion" class="col-sm-2 control-label"><h3>Documento<h3></label>
        <div class="col-sm-10">

          <input type="file" class="form-control" name="direccion">


        </div>
      </div>

      <br>
      <br>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success"> Guardar </button>
    </div>
  </div>

</form>

                </div>

             
            </div>
        </div>
    </body>
</html>