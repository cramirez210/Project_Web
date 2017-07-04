@section('content')
@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
@endif
            <div class="container">
                
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
@endsection