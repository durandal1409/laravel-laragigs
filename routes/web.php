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

// create listing
Route::get('listings/create', [LIstingController::class, 'create']);

// store new listing data
Route::post('listings', [LIstingController::class, 'store']);

//edit listing
Route::get('/listings/{listing}/edit', [LIstingController::class, 'edit']);

//submit edited listing
Route::put('/listings/{listing}', [LIstingController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [LIstingController::class, 'destroy']);

//single listing
Route::get('/listings/{listing}', [LIstingController::class, 'show']);
