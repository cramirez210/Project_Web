@extends('layouts.app')

@section('content')
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                             <h1>Agregar nuevos archivos</h1>
                        </div>
                            <div class="panel panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="/archivos" enctype="multipart/form-data">

                 {{ csrf_field() }}

        <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label"><h3>Descripción<h3></label>
        <textarea class="form-control" rows="2" name="descripcion" placeholder="Digite el título"></textarea>
        @if($errors->has('titulo'))
        <span style="color:red;"> {{ $errors->first('titulo') }} </span>
         @endif
  </div>

                
      <div class="form-group">
        <label for="direccion" class="col-sm-2 control-label"><h3>Documento<h3></label>
          <input type="file" class="form-control" name="direccion">
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