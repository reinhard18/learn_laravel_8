<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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


// Laravel 8
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', 'App\Http\Controllers\PagesController@about');


// Route to user array (JSON)
Route::get('/users', function(){
    return ['Laravel', 'HTML', 'Laravel'];
})->name('theuser');

// Route to user json
Route::get('/user', function () {
    return response()->json([
        'name' => 'Reinhard',
        'course' => 'Laravel beginner'
    ]);
});

// Route to user - funciton
Route::get('/usersas', function () {
    return redirect('/index');
});


Route::get('/', function(){
    return view('welcome');
});

// Patern is integer
Route::get('/product/integer/{id}',
    [ProductController::class, 'show'])->where('id', '[0-9]+');

//Route Param
Route::get('/product/{name}/{id}', [ProductController::class, 'showProduct'])->where(
    'name', '[a-z]+',
    'id', '[0,9]+'
);

Route::get('/posts', [PostsController::class, 'index']);



