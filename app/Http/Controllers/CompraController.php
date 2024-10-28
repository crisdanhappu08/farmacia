<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\medicamento;
use Illuminate\Http\Request;

class CompraController extends Controller
{
   function compra () {
    $medicamentos = medicamento::all();
    return view('compra')->with('medicamentos' ,$medicamentos);
    }

}
