<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Lab18Controller;
use App\Http\Controllers\Lab19Controller;

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

//lab20

Route::get('/task14_1/set', [Lab20Controller::class, 'task14_1_set']);
Route::get('/task14_1/get', [Lab20Controller::class, 'task14_1_get']);

Route::get('/task14_2', [Lab20Controller::class, 'task14_2']);

Route::get('/task14_3', [Lab20Controller::class, 'task14_3']);

Route::get('/task14_4', [Lab20Controller::class, 'task14_4']);

Route::get('/task14_5', [Lab20Controller::class, 'task14_5']);

Route::get('/task14_6/set', [Lab20Controller::class, 'task14_6_set']);
Route::get('/task14_6/forget', [Lab20Controller::class, 'task14_6_forget']);

Route::get('/task14_7/set', [Lab20Controller::class, 'task14_7_set']);
Route::get('/task14_7/pull', [Lab20Controller::class, 'task14_7_pull']);

Route::get('/task14_8/set', [Lab20Controller::class, 'task14_8_set']);
Route::get('/task14_8/flush', [Lab20Controller::class, 'task14_8_flush']);

Route::get('/task14_9', [Lab20Controller::class, 'task14_9']);

Route::get('/task14_10', [Lab20Controller::class, 'task14_10']);

Route::get('/task14_11_set', [Lab20Controller::class, 'task14_11_set']);
Route::get('/task14_12_get', [Lab20Controller::class, 'task14_12_get']);
?>