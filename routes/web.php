<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

//Ajukan Panjar
Route::get('/ajukan-panjar', [App\Http\Controllers\AjukanPanjarController::class, 'index'])
->middleware(['auth'])
->name('ajukanPanjar');

//Pantau Panjar
Route::get('/pantau-panjar', [App\Http\Controllers\PantauPanjarController::class, 'index'])
->name('pantauPanjar');

//Detail Panjar
Route::get('/detail-panjar', [App\Http\Controllers\DetailPanjarController::class, 'index'])
->name('detailPanjar');

///////// Admin //////////
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])
->middleware(['auth','admin'])
->name('homeAdmin');

Route::get('/admin/detail-perkara/{id}', [App\Http\Controllers\Admin\DetailPerkaraController::class, 'index'])
->middleware(['auth','admin'])
->name('detailPerkaraAdmin');

Route::get('/admin/detail-perkara', [App\Http\Controllers\Admin\DetailPerkaraController::class, 'index'])
->middleware(['auth','admin'])
->name('detailPerkaraAdmin.edit');


Auth::routes();
