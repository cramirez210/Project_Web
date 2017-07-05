@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        @if(Auth::user()->rol == 2)
        <a class="btn btn-primary" href="/archivos">
        <span class="glyphicon glyphicon-upload"></span> Cargar Archivo</a> 
        @else
        <a href="/archivos/{{$user->id}}/descargar" class="btn btn-success btn-md">Descargar todo</a>
        @endif
            <br>
            <br>

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Archivos</h4> </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                             <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                             </tr>
                      </thead>
                    <tbody>

                        @foreach ($user->archivos as $archivo)
                            <tr>
                                <td class="info"> {{$archivo->titulo}} </td>
                                <td class="info"> {{$archivo->descripcion}} </td>
                                <td class="warning"> 
                                    <a href="/archivos/{{$archivo->id}}/eliminar" class="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-remove-circle"></span> Eliminar</a>
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