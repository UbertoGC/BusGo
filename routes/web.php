<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\RutumController;
use App\Http\Controllers\SelectviajeController;
use App\Http\Controllers\ConfirmardatosController;
use App\Http\Controllers\ConfirmarreservaController;
use App\Http\Controllers\TerminosController;

Route::get('/', function () {
    return view('welcome');
});
/*Arreglado*/
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/homebusiness', [HomeController::class, 'index'])->name('homebusiness');
Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
Route::get('/client/dashboard', [ClientHomeController::class, 'index'])->name('client.dashboard');
Route::get('/acerca', [AcercaController::class, 'index'])->name('acerca');
Route::get('/soporte', [SoporteController::class, 'index'])->name('soporte');
Route::get('/selectviaje', [SelectviajeController::class, 'index'])->name('viaje');
Route::get('/selectviaje/confirmardatos', [ConfirmardatosController::class, 'index'])->name('confirmardatos');
Route::get('/selectviaje/confirmarreserva', [ConfirmarreservaController::class, 'index'])->name('confirmardatos');
Route::get('/terminos', [TerminosController::class, 'index'])->name('terminos');
Route::resource('/ruta', App\Http\Controllers\RutumController::class)->middleware('auth');
Route::resource('/viajes', App\Http\Controllers\ViajeController::class)->middleware('auth');

