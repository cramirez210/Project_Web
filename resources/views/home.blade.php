@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a class="btn btn-primary" href="/archivos">Cargar Archivo</a>
            <br>
            <br>

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Archivos</h4></div>

                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                             <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                             </tr>
                        </thead>
                    <tbody>
                        @foreach ($archivos as $archivo)
                            <tr>
                                <td class="info"> {{$archivo->direccion}} </td>
                                <td class="info"> {{$archivo->descripcion}} </td>
                                <td class="warning"> 
                                    <a href="/archivos/{{$archivo->id}}/descargar" class="btn btn-success btn-xs">Descargar</a>
                                    <a href="/archivos/{{$archivo->id}}/eliminar" class="btn btn-danger btn-xs">Eliminar</a> 
                                </td>
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
@endsection
