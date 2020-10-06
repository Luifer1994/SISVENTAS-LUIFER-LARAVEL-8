<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EstadoProductosController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth:sanctum', 'verified'])->get('/', [PaisesController::class, 'index'])->name('pais');

Route::middleware(['auth:sanctum', 'verified'])->resource('/pais', PaisesController::class)->names('pais')->parameters(['pais' => 'request']);

Route::resource('user', UsersController::class)->names('user')->parameters(['user' => 'request']);

Route::resource('departamento', DepartamentosController::class)->names('departamento')->parameters(['departamento' => 'request']);

Route::resource('ciudad', CiudadesController::class)->names('ciudad')->parameters(['ciudad' => 'request']);

Route::resource('rol', RolesController::class)->names('rol')->parameters(['rol' => 'request']);


// Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

















