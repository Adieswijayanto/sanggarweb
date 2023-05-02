<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.app');
})->name('home');


Route::get('/partnership', [HomeController::class, 'partnership'])->name('partnership');
Route::get('/detailpartner', [HomeController::class, 'detailpartner'])->name('detailpartner');
Route::get('/detailkelas', [HomeController::class, 'detailkelas'])->name('detailkelas');
Route::get('/termofservices', [HomeController::class, 'termofservices'])->name('termofservices');