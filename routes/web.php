<?php

use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\ViajeController;
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
});

Route::get('viajeros/listar',[ViajeroController::class, 'index'])->name('viajero.index');
Route::get('viajero/create',[ViajeroController::class,'create'])->name('viajero.create');
Route::post('viajero/store',[ViajeroController::class,'store'])->name('viajero.store');
Route::get('viajero/{viajero}',[ViajeroController::class,'show'])->name('viajero.show');
Route::get('viajero/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');
Route::put('viajero/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');

Route::delete('viajero/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');


//rutas viaje

Route::get('viaje/listar',[ViajeController::class, 'index'])->name('viaje.index');
Route::get('viaje/create',[ViajeController::class,'create'])->name('viaje.create');
Route::post('viaje/store',[ViajeController::class,'store'])->name('viaje.store');
Route::get('viaje/{viaje}',[ViajeController::class,'show'])->name('viaje.show');
Route::get('viaje/{viaje}/editar',[ViajeController::class,'edit'])->name('viaje.edit');
Route::put('viaje/{viaje}',[ViajeController::class,'update'])->name('viaje.update');

Route::delete('viaje/{viaje}',[ViajeController::class,'destroy'])->name('viaje.destroy');