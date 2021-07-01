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

Route::get('/home',             [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/details/{id}',     [App\Http\Controllers\HomeController::class, 'details'])->name('details');
Route::get('/create-user',      [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/add-user',        [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::put('/update/{id}',      [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}',      [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
