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
	Route::get('/git/index/hi',[CityController::class, 'index']);
//2
    Route::get('/2/{color}',[CityController::class, 'css']);
//3
    Route::get('/git/input/okak',[CityController::class,'input']);
//4
    Route::get('/4/{color}',[CityController::class,'red']);
//5
    Route::get('/git/href/text',[CityController::class,'text']);
//6
    Route::get('/git/var',[CityController::class, 'var']);
//7
    Route::get('/git/massive', [CityController::class, 'massive']);
//8
    Route::get('/git/numbers',[CityController::class, 'numbers']);
//9
    Route::get('/git/city',[CityController::class, 'city']);
//10
    Route::get('/git/location',[CityController::class, 'location']);
?>