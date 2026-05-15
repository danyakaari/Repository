<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Lab18Controller;
use App\Http\Controllers\Lab19Controller;
use App\Http\Controllers\Lab20Controller;
use App\Http\Controllers\Lab21Controller;
use App\Http\Controllers\Lab22Controller;
use App\Http\Controllers\Lab23Controller;
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

//lab23

Route::get('/task17_1', [Lab23Controller::class, 'task17_1']);
Route::get('/task17_1/json', [Lab23Controller::class, 'task17_1_json']);
Route::get('/task17_1/view', [Lab23Controller::class, 'task17_1_view']);