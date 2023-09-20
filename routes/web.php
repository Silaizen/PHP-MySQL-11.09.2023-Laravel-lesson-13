<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Js;

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

Route::get('/', [MainController::class, 'index']);
Route::get('contacts', [MainController::class, 'contacts']);
Route::post('contacts', [MainController::class, 'sendMail']);


Route::get('/search', [SearchController::class, 'search']);