<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GameController;

// I've added the HomeController to return the view instead of the anonymous function.
Route::get('/', [HomeController::class, 'index'])->name('home');

// With resouce method, we can create all the routes for the controller with one line of code.
Route::resource('teams', TeamsController::class);
Route::resource('games', GameController::class);