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

Route::post('/admin/form', [App\Http\Controllers\Admin\HomeController::class, 'store'])
->middleware(['auth','admin'])

->middleware(['auth','admin'])
->name('perkara.store');

Route::delete('/admin/delete/{id}', [App\Http\Controllers\Admin\HomeController::class, 'destroy'])
->middleware(['auth','admin'])
->name('perkara.destroy');

Route::get('/admin/detail-perkara/{id}', [App\Http\Controllers\Admin\HomeController::class, 'show'])
->middleware(['auth','admin'])
->name('perkara.show');

Route::get('/admin/detail-perkara', [App\Http\Controllers\Admin\DetailPerkaraController::class, 'index'])
->middleware(['auth','admin'])
->name('detailPerkaraAdmin.edit');




Route::get('/admin/data-penggugat', [App\Http\Controllers\Admin\DataPenggugatController::class, 'index'])
->middleware(['auth','admin'])
->name('dataPenggugat');



Route::post('/admin/detail-perkara', [App\Http\Controllers\Admin\DetailPerkaraController::class, 'store'])
->middleware(['auth','admin'])
->name('detail.store');

Route::delete('/admin/detail-perkara/{id}', [App\Http\Controllers\Admin\DetailPerkaraController::class, 'destroy'])
->middleware(['auth','admin'])
->name('detail.destroy');


Auth::routes();
