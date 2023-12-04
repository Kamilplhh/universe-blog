<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\PlanetController;
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

Route::get('/news', [InformationController::class, 'news']);

Route::get('/events', [InformationController::class, 'events']);

Route::get('/planet', [PlanetController::class, 'getPlanet']);

Route::get('/add', function () {
    return view('add');
});

Route::POST('/planet', [PlanetController::class, 'addPlanet']);