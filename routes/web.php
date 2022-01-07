<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController
};
use App\Http\Controllers\{
    SerieController
};
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
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');



Route::get('/cadastro-serie/create',  [SerieController::class, 'create_serie'])->name('posts.series.create_serie');

Route::get('/series/{id}',[SerieController::class,'show_serie'])->name('posts.series.show_serie');

Route::post('/series',[SerieController::class,'serie_store'])->name('posts.series.serie_store');
// Route::get('/list-serie',  [SerieController::class, 'list_serie'])->name('posts.series.list_serie');

Route::get('/series',[SerieController::class,'serie_index'])->name('posts.series.serie_index');
/*
Route::get('/series/create',[SerieController::class,'create'])->name('posts.series.create');


Route::get('/series/{id}',[SerieController::class,'show'])->name('posts.series.show');
Route::post('/series',[SerieController::class,'store'])->name('posts.series.store');
Route::get('/series',[PostController::class,'index'])->name('posts.series.index');
*/
Route::get('/', function () {
    return view('welcome');
});
