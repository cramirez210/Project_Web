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
                             <h3>Nuevo archivo</h3>
                        </div>
                            <div class="panel panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="/archivos/{{Auth::user()->id}}" enctype="multipart/form-data">

                 {{ csrf_field() }}

                  <div class="form-group">
        <label for="titulo" class="col-sm-2 control-label"><h3>Título<h3></label>
        <input type="text" class="form-control" name="titulo" placeholder="Digite el título" required>
  </div>

        <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label"><h3>Descripción<h3></label>
        <textarea class="form-control" rows="2" name="descripcion" placeholder="Digite el descripción" required></textarea>
  </div>

                
      <div class="form-group">
        <label for="direccion" class="col-sm-2 control-label"><h3>Documento<h3></label>
          <input type="file" class="file" name="direccion" required>
      </div>


  <div class="form-group">
      <button type="submit" class="btn btn-primary"> 
      <span class="glyphicon glyphicon-floppy-disk"></span> Guardar </button>
      <a href="/home" class="btn btn-default"> 
      <span class="glyphicon glyphicon-remove"></span> Cancelar </a>
  </div>

</form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection