<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\SeccionController;
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
    return view('layouts.principal');
});

Route::resource('/alumno', 'App\Http\Controllers\AlumnoController');
Route::resource('/nota', 'App\Http\Controllers\NotaController');

Route::get('/nota/{id}', [NotaController::class, 'show']);
Route::get('/nota/create/{id}', [NotaController::class, 'create']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
<<<<<<< HEAD
=======

Route::resource('/alumno','App\Http\Controllers\AlumnoController');
Route::resource('/nota','App\Http\Controllers\NotaController');

Route::get('/nota/{id}',[NotaController::class,'show']);
Route::get('/nota/create/{id}',[NotaController::class,'create']);

Route::resource('/curso','App\Http\Controllers\CursoController');

Route::resource('/clase','App\Http\Controllers\ClaseController');

Route::resource('/seccion','App\Http\Controllers\SeccionController');
>>>>>>> f93da8f254fa6d377e6cf5410f6c6d86b8a5a7bd
