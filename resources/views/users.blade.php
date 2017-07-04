@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Estudiantes</h4></div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                             <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                             </tr>
                        </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td class="info"> {{$usuario->name}} </td>
                                <td class="info"> {{$usuario->lastname}} </td>
                                <td class="info"> {{$usuario->id_card}} </td>
                                <td class="warning"> 
                                    <a href="/usuarios/{{$usuario->id}}/archivos" class="btn btn-success btn-xs">Ver Archivos</a>
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