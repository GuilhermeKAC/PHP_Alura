<?php

use Illuminate\Support\Facades\Route;
//Não esquecer de adiconar a rota dentro do WEB
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
