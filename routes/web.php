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
//lab19

Route::match(['get', 'post'], '/task13_1', [Lab19Controller::class, 'task13_1']);
Route::match(['get', 'post'], '/task13_2', [Lab19Controller::class, 'task13_2']);
Route::match(['get', 'post'], '/task13_3/{param1}/{param2}', [Lab19Controller::class, 'task13_3']);
Route::get('/test/method', [Lab19Controller::class, 'task13_4_8']);
?>