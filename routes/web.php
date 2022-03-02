<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'index']);
// // Route prefix NO 2
// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', [ProductController::class, 'eduGames']);
//     Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
//     Route::get('/riri-story-books', [ProductController::class, 'storyBooks']);
//     Route::get('/kolak-kids-songs', [ProductController::class, 'kidsSongs']);
// });

// // Route param NO 3
// Route::get('/news', [NewsController::class, 'listNews']);
// Route::get('/news/{title}', [NewsController::class, 'news']);

// // Route prefix NO 4
// Route::prefix('program')->group(function () {
//     Route::get('/karir', [ProgramController::class, 'karir']);
//     Route::get('/magang', [ProgramController::class, 'magang']);
//     Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
// });

// // Route biasa NO 5
// Route::get('/about-us', [AboutUsController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
