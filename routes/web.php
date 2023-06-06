<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
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
    return 'Home';
});

// la url solo permite números gracias al where
Route::get('/usuarios/{id}',[UserController::class,'show'])->where('id', '[0-9]+');;

// el de dani, el UserController llama a la funcion index
Route::get('/usuarios',[UserController::class,'index']);

// llamamos al controlador de usuarios y de ahí a la funcion index
//Route::get('/usuarios','UserController@index');

// llamamos al controlador y a la uncion en él create, o de la manera de abajo (ojo que empieza antes por la de abajo que)
Route::get('/usuarios/nuevo',[UserController::class,'create']);

// las variables por url van con {}, y al llamar a la funcio se pasan por parámetro
Route::get('/saludo/{name}/{nikname?}',[WelcomeUserController::class,'index']);



