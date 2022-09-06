<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, "index"]);

Route::get("/category/{article}", [BlogController::class, "getCategory"])->name("getCategory");
Route::get("/posts/{article}", [BlogController::class, "getPost"])->name("getPost");

