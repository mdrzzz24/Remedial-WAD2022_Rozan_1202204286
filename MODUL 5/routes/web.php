<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/', [KaryawanController::class,'karyawan']);
Route::get('/create', [KaryawanController::class,'create']);
Route::post('/store', [KaryawanController::class,'store']);
Route::get('/{id}/edit', [KaryawanController::class,'edit']);
Route::put('/{id}', [KaryawanController::class,'update']);
Route::delete('/{id}', [KaryawanController::class,'delete']);
