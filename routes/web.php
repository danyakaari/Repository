<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Lab18Controller;
use App\Http\Controllers\Lab19Controller;
use App\Http\Controllers\Lab20Controller;
use App\Http\Controllers\Lab21Controller;
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

//lab21
// 15.1
Route::match(['get', 'post'], '/task15_1', [Lab21Controller::class, 'task15_1']);
Route::get('/task15_1/success', [Lab21Controller::class, 'task15_1_success']);

// 15.2
Route::match(['get', 'post'], '/task15_2', [Lab21Controller::class, 'task15_2']);
Route::get('/task15_2/success', [Lab21Controller::class, 'task15_2_success']);

// 15.3
Route::get('/task15_3/old', [Lab21Controller::class, 'task15_3_old']);
Route::get('/task15_3/new', [Lab21Controller::class, 'task15_3_new'])->name('new.page');

// 15.4
Route::get('/task15_4/redirect', [Lab21Controller::class, 'task15_4_redirect']);
Route::get('/test/{param1}/{param2}', [Lab21Controller::class, 'task15_4_target'])->name('test.params');