<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

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

Route::view('/','home');
Route::get('/contacto', [MyFirstController::class, 'contactPage']);
Route::post('/contacto', [MyFirstController::class, 'processContact']);
Route::put('/contacto', [MyFirstController::class, 'processContactPut']);
//Route::put('/contacto', [MyFirstController::class, 'contactPage']);
//Route::patch('/contacto', [MyFirstController::class, 'contactPage']);
//Route::delete('/contacto', [MyFirstController::class, 'contactPage']);
//Route::head('/contacto', [MyFirstController::class, 'contactPage']);
//Route::options('/contacto', [MyFirstController::class, 'contactPage']);

//Route::match(['GET','POST'],'/uri', [MyFirstController::class, 'mathedFunction']);
//Route::any('/example',[MyFirstController::class, 'anyFunction']);
//Route::redirect('/route1','route2'); //302 redirecciónt temporal
//Route::redirectPermanent('/route1','route2'); //301 redirección permanente

Route::get('/example', [ MyFirstController::class, 'index'] );

/*Route::get('/{cadena?}', function ($cadena = null) {

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
});*/



