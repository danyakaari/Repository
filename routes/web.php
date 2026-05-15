<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Lab18Controller;
use App\Http\Controllers\Lab19Controller;
use App\Http\Controllers\Lab20Controller;
use App\Http\Controllers\Lab21Controller;
use App\Http\Controllers\Lab22Controller;
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

//lab22

// 16.1
Route::get('/task16_1/set', [Lab22Controller::class, 'task16_1_set']);
Route::get('/task16_1/get', [Lab22Controller::class, 'task16_1_get']);

// 16.2
Route::match(['get', 'post'], '/task16_2/form', [Lab22Controller::class, 'task16_2_form']);
Route::get('/task16_2/result', [Lab22Controller::class, 'task16_2_result']);

// 16.3
Route::match(['get', 'post'], '/task16_3', [Lab22Controller::class, 'task16_3']);