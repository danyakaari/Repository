<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
//lab12

Route::get('/post/all/{order?}/{dir?}', [PostsController::class, 'getAll']);
Route::get('/post/new', [PostsController::class, 'newPost']);
Route::post('/post/new', [PostsController::class, 'newPost']);
Route::match(['get', 'post'], '/post/edit/{id}', [PostsController::class, 'editPost']);
Route::get('/post/rework', [PostsController::class, 'rework']);
?>