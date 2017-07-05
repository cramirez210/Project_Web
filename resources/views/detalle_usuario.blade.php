@extends('layouts.app')

@section('content')
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="panel panel-heading">Usuario</div>
                  <div class="panel panel-body">
                    
                    <label for="name">Nombre</label>
                        <p>{{$usuario->name}}</p>
                   
                       <label for="lastname">Apellidos</label>
                       <p>{{$usuario->lastname}}</p>
            
                       <label for="id_card">Cédula</label>
                       <p>{{$usuario->id_card}}</p>

                       <label for="age">Edad</label>
                       <p>{{$usuario->age}}</p>

                       <label for="email">E-Mail</label>
                       <p>{{$usuario->email}}</p>
                  </div>
                </div>
                <a type="button" class="btn btn-primary" href="/usuarios/{{$usuario->id}}/editar"><span class="glyphicon glyphicon-edit"></span> Editar</a>

                </div>
                </div>
                </div>

@endsection