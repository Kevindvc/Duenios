<?php

use App\Http\Controllers\DuenioController;
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
    return view('welcome');
});

Route::get('/duenos',[DuenioController::class,'index'])->name('dueno.home');

Route::get('/duenos/nuevo', function () {
    return view("DueniosCrear");
})
    ->name('dueno.nuevo');

Route::post('/duenos/crear', [DuenioController::class, "create"])
    ->name('dueno.crear');

Route::get('/duenos/buscar/{idDueno}',DuenioController::class,'buscar')->name('dueno.buscar');

Route::delete('dueno/destroy/{idDueno}',[DuenioController::class,'destroy'])->name('dueno.destroy');
