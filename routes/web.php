<?php

use App\Http\Controllers\LIstingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//all listings
Route::get('/', [LIstingController::class, 'index']);

//single listing
Route::get('/listings/{listing}', [LIstingController::class, 'show']);

// create listing
Route::get('listings/create', [LIstingController::class, 'create']);