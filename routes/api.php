<?php

use App\Http\Controllers\API\CharactersController;
use App\Http\Controllers\AutenticarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::get('characters',[CharactersController::class,'index']);
Route::post('characters',[CharactersController::class,'store']);
Route::get('characters/{character}',[CharactersController::class,'show']);
Route::put('characters/{character}',[CharactersController::class,'update']);
Route::delete('characters/{character}',[CharactersController::class,'destroy']);*/
Route::apiResource('characters', CharactersController::class);

Route::post('registro',[AutenticarController::class, 'registroUsuario']);

Route::post('acceso',[AutenticarController::class, 'acceso']);

Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::post('cerrarsesion',[AutenticarController::class, 'cerrarSesion']);
});