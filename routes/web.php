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
//lab17

//11
Route::match(['get', 'post'], '/task11', [FormController::class, 'task11']);
//11.2
Route::match(['get', 'post'], '/task11_2', [FormController::class, 'task11_2']);
//11.3
Route::match(['get', 'post'], '/task11_3', [FormController::class, 'task11_3']);
//11.4
Route::get('/task11_4/form', [FormController::class, 'task11_4_form']);
Route::get('/task11_4/result', [FormController::class, 'task11_4_result']);
?>