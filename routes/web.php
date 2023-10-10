<?php

use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [NoticiasController::class, 'show'])->name('Inicio');
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
Route::get('/documentos/marco', [DocumentoController::class, 'show'])->name('marco');
Route::get('/documentos/plan', function () {
    return view('documentos.plan');
})->name('plan');

/*
NOTICIAS
*/
Route::get('/noticia', [NoticiasController::class, 'show1'])->name('noticias');

Route::get('/detallenoticia/{id}', [NoticiasController::class, 'detail'])->name('detallenoticia');
/*
DENUNCIA
*/
Route::get('/denuncia', function () {
    return view('denuncia');
})->name('denuncia');

/*
CONTACTO
*/
Route::get('/contacto', [MensajeController::class, 'show'])->name('contacto');

Auth::routes(['register' => false]);

Route::resource('home/denuncias', DenunciaController::class);
Route::post('mensajes', [MensajeController::class, 'store'])->name('mensajes.store');

Route::group(['middleware' => 'auth'], function () {
    // Rutas protegidas...
    Route::resource('noticias', NoticiasController::class);    
    Route::resource('documentos', DocumentoController::class);    

    Route::get('/home', [NoticiasController::class, 'index'])->name('home');

    Route::get('/home/noticias', [NoticiasController::class, 'index'])->name('home.noticias');

    Route::get('/home/denuncias', [DenunciaController::class, 'index'])->name('home.denuncias');
    Route::get('/home/denuncias/pdf/{id}', [DenunciaController::class, 'pdf'])->name('home.denuncias.pdf');
    Route::get('/home/denuncias/answer/{id}', [DenunciaController::class, 'answer'])->name('home.denuncias.answer');
    Route::post('/home/denuncias/{id}', [DenunciaController::class, 'checked'])->name('denuncias.checked');

    Route::get('/home/documentos', [DocumentoController::class, 'index'])->name('home.documentos');

    Route::get('/home/mensajes', [MensajeController::class, 'index'])->name('home.mensajes');

    Route::resource('home/users', UserController::class);
});
