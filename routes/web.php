<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EstadoPrestamosController;
use App\Http\Controllers\EstadoProductosController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TasaInteresController;
use App\Http\Controllers\TiposdocumentosController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth:sanctum', 'verified'])->get('/', [PaisesController::class, 'index'])->name('pais');

Route::middleware(['auth:sanctum', 'verified'])->resource('/pais', PaisesController::class)->names('pais')->parameters(['pais' => 'request']);

Route::resource('user', UsersController::class)->names('user')->parameters(['user' => 'request']);

Route::resource('departamento', DepartamentosController::class)->names('departamento')->parameters(['departamento' => 'request']);

Route::resource('ciudad', CiudadesController::class)->names('ciudad')->parameters(['ciudad' => 'request']);

Route::resource('rol', RolesController::class)->names('rol')->parameters(['rol' => 'request']);

Route::resource('genero', GenerosController::class)->names('genero')->parameters(['rol' => 'request']);

Route::resource('documento', TiposdocumentosController::class)->names('documento')->parameters(['documento' =>'request']);

Route::resource('intereses', TasaInteresController::class)->names('intereses')->parameters(['intereses' => 'request']);

Route::resource('Eprestamo', EstadoPrestamosController::class)->names('Eprestamo')->parameters(['Eprestamo' => 'request']);
// Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

















