<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BodegaController;
use App\Http\Controllers\API\MarcaController;

use App\Http\Controllers\API\ModeloController;
use App\Http\Controllers\API\DispositivoController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//El siguiente GET devuelve todas las bodegas y sus atributos 
Route::get('bodegas', [BodegaController::class,'index']);


//El siguiente GET devuelve todas las marcas y sus atributos 
Route::get('marcas', [MarcaController::class,'index']);

//Get para filtrar por marca, sólo se mostrarán modelos de marca disponible
Route::get('modelos/{id}', [ModeloController::class,'mostrarModelosPorMarca']);


//Devuelve todos los modelos de todas las bodegas 
Route::get('modelos/', [ModeloController::class,'index']);

//TODOS LOS DISPOSITIVOS 
Route::get('dispositivos/', [DispositivoController::class, 'index']);

Route::get('dispositivos/{id}', [DispositivoController::class,'mostrarDispositivosBodega']);

Route::get('dispositivosmarca/{param}/{dos}', [DispositivoController::class,'mostrarDispositivosBodegaMarca']);

//Bodega y modelo filtro
Route::get('dispositivosmodelo/{param}/{dos}', [DispositivoController::class,'mostrarDispositivosModelo']);



Route::post('agregar-dispositivo',[DispositivoController::class,'store']);

