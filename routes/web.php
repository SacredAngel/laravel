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




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [App\Http\Controllers\HomeController::class, 'index2']);
Route::post('/form', [App\Http\Controllers\HomeController::class, 'form']);


Route::get('/catalog', [App\Http\Controllers\HomeController::class, 'catalog']);

Route::get('/detali/{id}', [App\Http\Controllers\HomeController::class, 'detali']);


Route::get('/o_nas', [App\Http\Controllers\HomeController::class, 'welcome']);
Route::get('/add/{id}', [App\Http\Controllers\HomeController::class, 'corzina']);
Route::get('/add', [App\Http\Controllers\HomeController::class, 'tovari']);
Route::get('/corzina/{id}', [App\Http\Controllers\HomeController::class, 'delet_carzina']);
Route::post('/cat', [App\Http\Controllers\HomeController::class, 'categori']);
Route::post('/cat', [App\Http\Controllers\HomeController::class, 'cat']);
Route::get('/admin_panel', [App\Http\Controllers\HomeController::class, 'admin_panel']);
Route::get('/delet/{id}', [App\Http\Controllers\HomeController::class, 'delet']);
Route::get('/redect/{id}',[App\Http\Controllers\HomeController::class, 'red']);
Route::post('/redect/{id}',[App\Http\Controllers\HomeController::class, 'red2']);
Route::get('/carta', [App\Http\Controllers\HomeController::class, 'carta']);
