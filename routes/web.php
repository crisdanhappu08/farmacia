<?php

use App\Http\Controllers\CompraController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[UsuarioController::class,'login']);
Route::post('/loginCreate',[UsuarioController::class,'loginCreate']);
Route::get('/registro',[UsuarioController::class,'registro']);
Route::post('/registros',[UsuarioController::class,'registros']);
Route::get('contrasena',[UsuarioController::class, 'contrasena']);
Route::post('/medicamento', [MedicamentoController::class, 'medicamentoCreate']);
Route::get('/tabla-medicamento', [MedicamentoController::class, 'VistaMedicamento']);
Route::get('/compra',[CompraController::class,'compra']);
Route::post('/compra',[CompraController::class,'compra']);


Route::get('comprar', function (){
return view('/comprar');
});


Route::get('medicamento', function (){
    return view('/medicamento');
    });

Route::get('/menu', function () {
    return view('menu');
});
Route::get('usuario',[UsuarioController::class,'inicio']);
Route::get('reportes', function () {
    return view('reportes');
});
Route::get('acercade', function () {
    return view('acercade');
});
Route::get('sesion', function () {
    return view('sesion');
});








