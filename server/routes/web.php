<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
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

Route::get('/Welcome', function () {
    return view('welcome');
});


Route::get("/",[StudentController::class,"home"]);
Route::get("/customer",[CustomerController::class,"index"]);