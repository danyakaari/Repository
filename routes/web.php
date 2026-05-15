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
use App\Http\Controllers\Lab24Controller;

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

//lab24

Route::get('/task18_1', [Lab24Controller::class, 'task18_1']);
Route::get('/task18_2', [Lab24Controller::class, 'task18_2']);
Route::post('/task18_2', [Lab24Controller::class, 'task18_2_save']);
Route::get('/task18_3', [Lab24Controller::class, 'task18_3']);