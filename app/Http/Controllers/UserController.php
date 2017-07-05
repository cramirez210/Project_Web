<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     public function usuarios()
    {
        $usuarios = User::all();

        return view('users', compact('usuarios'));
    }

    public function show($id)
    {
        $usuario = User::find($id);

        return view('detalle_usuario', compact('usuario'));
    }

    public function editar($id){

        $usuario = User::find($id);

        return view('editar_usuario', compact('usuario'));
    }

    public function update($id)
    {
        $usuario = User::find($id);

    $usuario->name = request('name');
    $usuario->lastname = request('lastname');
    $usuario->id_card = request('id_card');
    $usuario->age = request('age');
    $usuario->password = request('password');
    $usuario->save();

        return redirect('/');
    }
}
