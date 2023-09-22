<?php

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
})->name('Inicio');
/*
QUIENES SOMOS
*/
Route::get('/quienes-somos/presentacion', function () {
    return view('quienes-somos.presentacion');
})->name('presentacion');
Route::get('/quienes-somos/locales', function () {
    return view('quienes-somos.locales');
})->name('locales');
Route::get('/quienes-somos/miembros', function () {
    return view('quienes-somos.miembros');
})->name('miembros');
Route::get('/quienes-somos/objetivos', function () {
    return view('quienes-somos.objetivos');
})->name('objetivos');

/*
DOCUMENTOS
*/
Route::get('/documentos/actas', function () {
    return view('documentos.actas');
})->name('actas');
Route::get('/documentos/marco', function () {
    return view('documentos.marco');
})->name('marco');
Route::get('/documentos/plan', function () {
    return view('documentos.plan');
})->name('plan');

/*
NOTICIAS
*/
Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

/*
DENUNCIA
*/
Route::get('/denuncia', function () {
    return view('denuncia');
})->name('denuncia');

/*
CONTACTO
*/
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');