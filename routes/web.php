<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InputController;
use App\Http\Controllers\InputController2;
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

Route::get('/kalkulator', [InputController::class, 'index'])->name('kalkulator');
Route::get('/kalkulator-manual', [InputController::class, 'manual'])->name('kalkulator-manual');
Route::post('hitung', [InputController::class, 'input'])->name('hitung');


Route::get('kalkulator2', [InputController2::class, 'index'])->name('kalkulator2');
Route::post('count', [InputController2::class, 'input'])->name('count');
