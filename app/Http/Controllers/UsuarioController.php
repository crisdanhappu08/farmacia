<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    function inicio()
    {
        $usuarios = Usuario::all();
        return view('usuario')->with('usuarios', $usuarios);
    }

    function login()
    {
        return view('login');
    }

    function loginCreate(Request $request)
    {
        $email = $request['email'];
        $password = $request['contrasena'];

        $usuario = Usuario::where('email', $email)->where('password', $password)->first();

        if ($usuario == null) {
            return redirect('/login')->with('alert', 'Usurio no encontrado');
        } else {
            return redirect('/menu');
        }
    }

    function registro()
    {
        return view('registro');
    }
    function registros(Request $registro)
    {
        $nombre = $registro['nombre'];
        $apellido = $registro['apellido'];
        $usuario = $registro['username'];
        $email = $registro['email'];
        $pass = $registro['password'];
        $confirmarPass = $registro['confirmpassword'];

        Usuario::create([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'rol' => 'usuario',
            'password' => $pass,
            'nombreUsuario' => $usuario


        ]);
        return redirect('/usuario');
    }

    function contrasena()
    {
        return view('contrasena');
    }
}
