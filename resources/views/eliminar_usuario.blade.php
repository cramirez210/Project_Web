@extends('layouts.app')

@section('content')
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="panel panel-heading"><h2>Eliminar usuario</h2></div>
                  <div class="panel panel-body">
                  <h3>{{$usuario->name}}, si estas de seguro de querer eliminar tu cuenta de usuario presiona el botón confirmar.</h3>
                  </div>
                </div>
                <a type="button" class="btn btn-primary" href="/usuarios/{{$usuario->id}}/eliminar"><span class="glyphicon glyphicon-ok"></span> Confirmar</a>
                @if(Auth::user()->rol == 2)
                <a href="/home" class="btn btn-default"> 
                @else
                <a href="/usuarios" class="btn btn-default"> 
                 @endif
                <span class="glyphicon glyphicon-remove"></span> Cancelar </a>
                </div>
                </div>
                </div>

@endsection