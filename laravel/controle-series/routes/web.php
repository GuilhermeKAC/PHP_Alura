<?php

use Illuminate\Support\Facades\Route;
//Não esquecer de adiconar a rota dentro do WEB
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/criar', [SeriesController::class, 'store']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy']);
