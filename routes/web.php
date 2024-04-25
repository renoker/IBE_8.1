<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TurnkeyController;
use Illuminate\Support\Facades\Route;


Route::get('/',                         [HomeController::class, 'index'])->name('home.index');
Route::get('/nosotros',                 [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/turnkey',                  [TurnkeyController::class, 'index'])->name('turnkey.index');
Route::get('/catalogo',                 [DirectoryController::class, 'index'])->name('directory.index');
Route::get('/catalogo/{directory}',     [DirectoryController::class, 'show'])->name('directory.show');
Route::get('/servicios',                [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('/contacto',                 [ContactController::class, 'index'])->name('contacto.index');
Route::post('/contacto',                [ContactController::class, 'store'])->name('contact.store');
Route::post('/cotizacion',              [CotizacionController::class, 'store'])->name('cotizacion.store');

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');
