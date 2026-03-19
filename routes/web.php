<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test7Controller;
use App\Http\Controllers\CategoryController;
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
//1
Route::get('/git', [test1Controller::class, 'show']);
//2
Route::get('/git/cnt{surname}/{name}',  [test2Controller::class, 'show']);
//3 
Route::get('/git/cnt/{game}/{score}',  [test3Controller::class, 'show']); 
//4
Route::get('/git/title/slot',  [test4Controller::class, 'show']);
//7-11
Route::get('/git/title/slot',  [test7Controller::class, 'user'])->name('test4.user');
Route::get('/git/{name}/{age}/{surname}',[test8Controller::class, 'show'])->name('components.layout8');

//Route::get('/git/{id}/name', [test8Controller::class, 'name'])->name('users.name');
//Route::get('/git/{id}/surname', [test8Controller::class, 'sur'])->name('users.surname');
//Route::get('/git/{id}/age', [test8Controller::class, 'age'])->name('users.age');

?>