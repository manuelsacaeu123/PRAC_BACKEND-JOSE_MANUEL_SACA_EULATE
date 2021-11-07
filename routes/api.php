<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('estudiante',[\App\Http\Controllers\EstudianteController::class,'index']);
Route::post('estudiante',[\App\Http\Controllers\EstudianteController::class,'store']);
Route::get('estudiante/{estudiante}',[\App\Http\Controllers\EstudianteController::class,'show']);
Route::put('estudiante/{estudiante}',[\App\Http\Controllers\EstudianteController::class,'update']);
Route::delete('estudiante/{estudiante}',[\App\Http\Controllers\EstudianteController::class,'destroy']);
