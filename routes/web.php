<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;

Route::get('/', function () {
    return view('home');
});

Route::resource('projects', ProjectController::class);
Route::resource('technologies', TechnologyController::class);
