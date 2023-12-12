<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsoController;
use App\Http\Controllers\ExtrahospitalarioController;
use App\Http\Controllers\LugaresController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para uso
Route::get('uso', [UsoController::class, 'index'])->middleware('validateJWT');
Route::post('uso/create', [UsoController::class, 'store'])->middleware('validateJWT');
Route::put('uso/{id}', [UsoController::class, 'update'])->middleware('validateJWT');

// Rutas para Extrahospitalario
Route::get('/extrahospitalario', [ExtrahospitalarioController::class, 'index'])->middleware('validateJWT');
Route::post('/extrahospitalario/create', [ExtrahospitalarioController::class, 'store'])->middleware('validateJWT');
Route::get('/extrahospitalario/{id}', [ExtrahospitalarioController::class, 'show'])->middleware('validateJWT');
Route::put('/extrahospitalario/{id}', [ExtrahospitalarioController::class, 'update'])->middleware('validateJWT');
Route::delete('/extrahospitalario/{id}', [ExtrahospitalarioController::class, 'destroy'])->middleware('validateJWT');

// Rutas para Lugares
Route::get('/lugares', [LugaresController::class, 'index'])->middleware('validateJWT');
Route::post('/lugares/create', [LugaresController::class, 'store'])->middleware('validateJWT');
Route::get('/lugares/{id}', [LugaresController::class, 'show'])->middleware('validateJWT');
Route::put('/lugares/{id}', [LugaresController::class, 'update'])->middleware('validateJWT');
Route::delete('/lugares/{id}', [LugaresController::class, 'destroy'])->middleware('validateJWT');