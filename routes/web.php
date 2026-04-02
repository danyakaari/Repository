<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test7Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\test2Controller;
use App\Http\Controllers\test1Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\test3Controller;
use App\Http\Controllers\test4Controller;
use App\Http\Controllers\test8Controller;

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
//lab-5

//1
	Route::get('/page',[CityController::class, 'index']);
//2
    Route::get('/git/{color}',[CityController::class, 'css']);
//3
    Route::get('/git/input/okak',[CityController::class,'input']);
//4
    Route::get('/git/{color}',[CityController::class,'red']);
//5
    // Route::get('/git/{color}',[CityController::class,''])
//6
    Route::get('/git/var',[CityController::class, 'var']);
?> 