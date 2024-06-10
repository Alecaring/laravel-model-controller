<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\HomePageController;
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

Route::get('/', 
[HomePageController::class, "index"]
)->name("home.index");

Route::get('/About', 
[AboutPageController::class, "about"]
)->name("about.about");
