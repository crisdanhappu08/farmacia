<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MedicamentoController extends Controller
{
    function VistaMedicamento()
    {
        $Medicamentos = medicamento::all();
        return view('TablaMedicamento')->with('ListaMedicamento',$Medicamentos);
    }


    function medicamentoCreate(Request $registros)
    {
        $nombre = $registros['nombre'];
        $costo = $registros['precio'];
        $cantidad =$registros['cantidad_disponible'];
        $categoria = $registros['categoria'];
        $descripcion=$registros['descripcion'];
        $url=$registros['url'];


        medicamento:: create([
            'nombre' => $nombre,
            'precio' => $costo,
            'cantidad' => $cantidad,
            'categoria' =>$categoria,
            'descripcion'=>$descripcion,
            'url'=>$url
        ]);

        return redirect('/tabla-medicamento');
    }


}
