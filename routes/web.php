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
    return view('welcome');
});

Auth::routes(); 

// Route::resource('/notas', 'NotaController')->middleware('auth');
Route::get('/notas', [App\Http\Controllers\NotaController::class, 'index'])->name('notas');
Route::post('/notas', [App\Http\Controllers\NotaController::class, 'store'])->name('notas');
Route::put('/notas/{id}', [App\Http\Controllers\NotaController::class, 'update'])->name('notas');
Route::delete('/notas/{id}', [App\Http\Controllers\NotaController::class, 'destroy'])->name('notas');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
