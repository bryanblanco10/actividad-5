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

Route::get('/', function () {
    return view('home.home');
})->name('inicio');

Route::get('/jugadores', function () {
    return view('jugadores.jugadores');
})->name('jugadores');

Route::get('/palmares', function () {
    return view('palmares.palmares');
})->name('palmares');

// Route::get('/clientes', function () {
//     return view('clientes.clientes');
// })->name('clientes');

Route::resource('/clientes', ClienteController::class);