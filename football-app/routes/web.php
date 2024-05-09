<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LeagueController;

// IMPORTANT: The specific routes must go before than the resource one.
// I've added the HomeController to return the view instead of the anonymous function.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Added two routes to recover the teams of a league that have been deleted.
Route::get('teams/deleted', [TeamsController::class, 'showDeleted'])->name('teams.deleted');
Route::put('teams/{team}/restore', [TeamsController::class, 'restore'])->name('teams.restore');
// Route for the select-league form, to store the league_id in the session.
Route::post('/select-league', [LeagueController::class, 'selectLeague'])->name('select-league');

// With resouce method, we can create all the routes for the controller with one line of code.
Route::resource('teams', TeamsController::class);
Route::resource('games', GameController::class);
Route::resource('leagues', LeagueController::class);
