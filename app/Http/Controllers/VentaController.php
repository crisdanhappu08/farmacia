<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use App\Models\Usuario;
use App\Models\venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    function tablaventa()
    {
        $venta = venta::all();
    }
    function venta()
    {
        $usuarios = Usuario::all();
        return view('ventas')->with('usuarios', $usuarios);
    }

    function ventaPost(Request $request)
    {
        
        dd($request['idUsuario']);
    }
}
