<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
Route::get('/user', [UserController::class, 'show']);
//2
Route::get('/user', [UserController::class, Controller::class, 'show']);
//3
Route::get('/user/all/', [UserController::class, Controller::class, 'show']);
//6
Route::get('/user/{name}',[ArticleController::class, Controller::class, 'show']);
//7
Route::get('user/{surname}/{name}', [OkakController::class, 'show'])
//8

?>