<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\archivo;
use App\User;
use Storage;


class ArchivosController extends Controller
{

  /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'string|max:255',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   	public function index()
   	{
        return view('archivo');

   	}
    public function create($id)
    {
      $user = User::find($id);
        
        return view('home', compact('user'));
    }

    public function mostrar($id)
    {
      
      $user = User::find($id);

      return view('home', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id) //Almacener los datos
    {

      $archivos = new archivo();
      $archivos->user_id = $id;
      $archivos->titulo = $request->titulo;
      $archivos->descripcion = $request->descripcion;

      $file = $request->file('direccion');  //Se guarda el contenido del request de tipo file en una variable

      $file_route = time().'_'.$file->getClientOriginalName(); //Se guarda la ruta, se utiliza el time para que ningun archivo se llame igual

      Storage::disk('archivosGuardados')->put($file_route, file_get_contents($file->getRealPath() )); //Usar el estorage para ingresarle la ruta y el contenido

      $archivos->direccion = $file_route; // Al modelo de noticias asignar la ruta creada

      $user = User::find($id);

      $file = glob(storage_path('archivosGuardados/'.$archivos->direccion));

        \Zipper::make('ucr/'.$user->name.$user->lastname.'.zip')->add($file);

      if( $archivos->save())
      {
        return back()->with('msj','Datos guardados correctamente');
      }
      else
      {
        return back()->with('errormsj','Error, los datos no se guardaron');
      }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $archivo = archivo::find($id);
      $user = User::find($archivo->user_id);

       \File::delete(storage_path().'/archivosGuardados/'.$archivo->direccion);
       \Zipper::make('ucr/'.$user->name.'.zip')->remove($archivo->direccion);

       $archivo->delete();

        return view('home', compact('user'));
    }

    public function descargar($id){

      $user = User::find($id);

       return response()->download(public_path('ucr/'.$user->name.$user->lastname.'.zip'));
           }
}