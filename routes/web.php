<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.panel');
})->middleware(['auth'])->name('dashboard');


Route::resource('/users',UserController::class)->middleware('auth')->except('show');

Route::resource('/categorys' , CategoryController::class)->middleware('auth')->except('show');

Route::resource('/posts' , PostController::class)->middleware('auth')->except('show');
 
Route::resource('/articles' , ArticleController::class);

require __DIR__.'/auth.php';
