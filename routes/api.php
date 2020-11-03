<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Personas//
Route::get("/personas/userid/{id?}","API\PersonaController@index")->where("id","[0-9]+");
Route::post("/personas/crear","API\PersonaController@guardar");
Route::delete("/personas/eliminar/{id?}","API\PersonaController@eliminar")->where("id","[0-9]+");
Route::post("/personas/userid/","API\PersonaController@userid")->where("id","[0-9]+");



//Comentarios//
Route::get("/comentarios/user/{id?}","API\ComentarioController@comentuser")->where("id","[0-9]+");
Route::get("/comentarios/producto/{id?}","API\ComentarioController@comentproducto")->where("id","[0-9]+");
Route::get("/comentarios/{id?}","API\ComentarioController@comentario")->where("id","[0-9]+");



//Productos//
Route::get("/producto/id/{id?}","API\ProductoController@index")->where("id","[0-9]+");
Route::post("/producto/nuevo","API\ProductoController@nuevo");
Route::delete("/producto/eliminar/{id?}","API\ProductoController@eliminar")->where("id","[0-9]+");