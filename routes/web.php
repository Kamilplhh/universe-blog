<?php

use App\Http\Controllers\InformationController;
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

Route::get('/', [InformationController::class, 'index']);

Route::get('/news', function () {
    return view('news');
});

Route::get('/planet', function () {
    return view('planet');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/add', function () {
    return view('add');
});
