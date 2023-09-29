<?php

use App\Http\Controllers\CosplayerController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\RentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('Cosplayer', [CosplayerController::class, 'index']);
Route::get('/', [OutfitController::class, 'index']);
Route::get('Rents', [RentsController::class, 'index']);