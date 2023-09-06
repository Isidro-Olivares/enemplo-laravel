<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo?}', function ($tipo = null) {//dentro de {} va si es opcional o no, en la funcion se da un predeterminado
    //dd($tipo);
    return view('contacto', compact('tipo')); //tambien se puede hacer         view('contacto')->with(['otro_nombre' => $tipo]);
});

Route::post('/contacto', function (Request $request) {
    dd($request->correo);   //despues de la flechita es lo que se quiera mostrar all() o 
});