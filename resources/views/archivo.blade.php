@extends('layouts.app')

@section('content')
@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
@endif
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                             <h3>Agregar nuevo archivo</h3>
                        </div>
                            <div class="panel panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="/archivos/{{Auth::user()->id}}" enctype="multipart/form-data">

                 {{ csrf_field() }}

                  <div class="form-group">
        <label for="titulo" class="col-sm-2 control-label"><h3>Título<h3></label>
        <input type="text" class="form-control" name="titulo" placeholder="Digite el título">
        @if($errors->has('titulo'))
        <span style="color:red;"> {{ $errors->first('titulo') }} </span>
         @endif
  </div>

        <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label"><h3>Descripción<h3></label>
        <textarea class="form-control" rows="2" name="descripcion" placeholder="Digite el descripción"></textarea>
        @if($errors->has('descripcion'))
        <span style="color:red;"> {{ $errors->first('descripcion') }} </span>
         @endif
  </div>

                
      <div class="form-group">
        <label for="direccion" class="col-sm-2 control-label"><h3>Documento<h3></label>
          <input type="file" class="file-input" name="direccion">
      </div>

  <div class="form-group">
      <button type="submit" class="btn btn-success"> Guardar </button>
  </div>

</form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection