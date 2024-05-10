<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
Route::get('/', [ChamadoController::class,'index']);
Route::get('/create',[ChamadoController::class,'create']);
Route::get('/delete',[ChamadoController::class,'delete']);
Route::get('/update',[ChamadoController::class,'update']);
Route::get('/read',[ChamadoController::class,'read']);
Route::post('/create',[ChamadoController::class,'store']);
Route::delete('/{id}',[ChamadoController::class,'destroy']);
Route::put('/{id}',[ChamadoController::class,'edit']);
