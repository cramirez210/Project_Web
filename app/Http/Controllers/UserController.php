<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{

    public function rules(){
        
        return $rules = array(
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer',
            'password' => 'required|string|min:6|confirmed'
        );
    }

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

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules());

    $usuario = User::find($id);

    $usuario->name = request('name');
    $usuario->lastname = request('lastname');
    $usuario->age = request('age');
    $usuario->password = bcrypt(request('password'));
    $usuario->save();

        return redirect('/usuarios/'.$usuario->id.'/perfil')->with('msj','Datos actualizados correctamente!'); ;
    }

    public function eliminar($id)
    {
        $usuario = User::find($id);

        return view('eliminar_usuario', compact('usuario'));
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect('/');
    }
}
