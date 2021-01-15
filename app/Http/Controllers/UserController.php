<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

  // Listado de los usuarios en la BD
  public function listar(){
    $data['users'] = Empleado::paginate(8);

    return view('usuarios.listar', $data);
  }

  // Formulario del usuario
  public function userform(){
    return view('usuarios.userform');
  }

  // Guardar usuarios
  public function save(Request $request){

    // Validación de los campos
    $validator = $this->validate($request, [
      'nombre' => 'required|string|max:255',
      'apellido' => 'required|string|max:255',
      'edad' => 'required|integer|max:100',
    ]);

    $userdata = request()->except('_token');
    Empleado::insert($userdata);

    return back()->with('usuarioGuardado', 'Usuario guardado.');
  }
}
