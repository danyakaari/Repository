<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NaakiController;
use App\Http\Controllers\OkakController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BaxxController;
use App\Http\Controllers\test4Controller;

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
//1
Route::get('/git', [OkakController::class, 'show']);
//2
Route::get('/git/cnt{surname}/{name}',  [NaakiController::class, 'show']);
//3 
Route::get('/git/cnt/{game}/{score}',  [BaxxController::class, 'show']); 
//4
Route::get('/git/title/slot',  [test4Controller::class, 'show']);
//5
Route::get('/git/title/slot',  [UserController::class, 'user'])->name('test4.user');



?>