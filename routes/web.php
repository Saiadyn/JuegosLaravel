<?php

use App\Http\Controllers\FormularioController;
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

Route::get('/', function () {return view('index');});
Route::get('/juegos', function () {return view('juegos');});
Route::get('/informacion', function () {return view('informacion');});
Route::get('/formulario', function () {return view('formulario');});



/*Datos formulario*/ 

Route::post("/formulario",[FormularioController::class,"store"])->name("formulario.store");
