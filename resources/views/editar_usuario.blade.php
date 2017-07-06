@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" role="form" method="POST" action="/usuarios/{{$usuario->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $usuario->lastname }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ $usuario->age }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>El campo edad debe ser un número entero.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Clave</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Clave</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                                </button>
                                @if(Auth::user()->rol == 2)
                                <a href="/home" class="btn btn-default"> 
                                @else
                                <a href="/usuarios" class="btn btn-default"> 
                                 @endif
                                <span class="glyphicon glyphicon-remove"></span> Cancelar </a>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                </div>
@endsection