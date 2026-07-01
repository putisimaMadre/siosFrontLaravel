<?php

use App\Models\PdfUpload;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfUploadController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/servicios', function () {
    return view('services-dark');
});

Route::get('/nosotros', function () {
    return view('about');
});

Route::get('/controldeRoedores', function () {
    return view('controldeRoedores');
});

Route::get('/insectosRastrerosYVoladores', function () {
    return view('insectosRastrerosYVoladores');
});

Route::get('/sanidadeInocuidadIndustrial', function () {
    return view('sanidadeInocuidadIndustrial');
});


Route::get('/monitoreoYControlDeAves', function () {
    return view('monitoreoYControlDeAves');
});

Route::get('/tratamientosEspecialesEnMadera', function () {
    return view('tratamientosEspecialesEnMadera');
});

Route::get('/manejoDePlagaAlmacenada', function () {
    return view('manejoDePlagaAlmacenada');
});

// Ruta del menú principal (la nueva pantalla)
Route::get('/panel-pdf', [PdfUploadController::class, 'menu'])->name('pdf.menu');

// Rutas de carga existentes
Route::get('/subir-pdf', [PdfUploadController::class, 'index'])->name('pdf.index');
Route::post('/subir-pdf', [PdfUploadController::class, 'store'])->name('pdf.store');

// NUEVAS RUTAS: Lista y descarga individual por ID
Route::get('/lista-pdf', [PdfUploadController::class, 'list'])->name('pdf.list');
Route::get('/descargar-pdf/{id}', [PdfUploadController::class, 'downloadById'])->name('pdf.download.id');