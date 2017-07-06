@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Estudiantes</h4></div>
                <div class="panel-body">
                @if(count(@usuarios) >= 1)
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                             <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Archivos</th>
                             </tr>
                        </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        @if($usuario->rol == 2)
                            <tr>
                                <td class="info"> {{$usuario->name}} </td>
                                <td class="info"> {{$usuario->lastname}} </td>
                                <td class="info"> {{$usuario->id_card}} </td>
                                <td class="warning"> 
                                    <a href="/usuarios/{{$usuario->id}}/archivos" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-file"></span>  Ver</a>
                                    <a href="/archivos/{{$usuario->id}}/descargar" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-download"></span>  Descargar</a>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                  </table>
                </div>
                @else
                 <h3>No hay estudiantes registrados en el sistema.</h3>
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection