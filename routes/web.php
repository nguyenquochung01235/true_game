<?php

use App\Http\Controllers\Game\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[GameController::class, 'index']);
Route::get('/spin_game',[GameController::class, 'toSpinGame']);
Route::get('/vote_game',[GameController::class, 'toVoteGame']);