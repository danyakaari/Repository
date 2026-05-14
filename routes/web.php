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
//lab11

//1
Route::get('/post/all', [PostController::class, 'getAll']);
//2
Route::get('/post/{id}', [PostController::class, 'getOne'])->where('id', '[0-9]+');
//3 25.8
Route::get('/post/all/{order?}',[PostController::class, 'getAll'])->where('order', 'id|title|date');
//4 25.9
Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])->where('order', 'id|title|date')->where('dir', 'asc|desc');
?>