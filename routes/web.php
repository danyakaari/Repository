<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
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
//lab18

//12.1
Route::get('/task12_1/form', [Lab18Controller::class, 'task12_1_form']);
Route::post('/task12_1/result', [Lab18Controller::class, 'task12_1_result']);

//12.2
Route::get('/task12_2', [Lab18Controller::class, 'task12_2']);

//2.3
Route::match(['get', 'post'], '/task12_3', [Lab18Controller::class, 'task12_3']);

//12.4
Route::match(['get', 'post'], '/task12_4', [Lab18Controller::class, 'task12_4']);
?>