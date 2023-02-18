<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{cadena?}', function ($cadena = null) {

    $resultado = 'No conocido';
    switch ($cadena) {
        case 'hola-mundo':
            $resultado = 'Hola usuario';
            break;
        case 'hola-laravel':
            $resultado = 'Hola! Soy bastante jóven y tengo menos de un mes';
            break;
        default:
            $resultado = 'Pedona, no te he entendido';
            break;
    }

    return view('welcome', [
        'cadena'=>$resultado
    ]);
});



