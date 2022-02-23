<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
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

// Praktikum 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     echo "Nama : Akhmadheta Hafid Prasetyawan";
//     echo "<br>NIM : 2041720221";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID {$id}";
// });

// Praktikum 2 satu controller
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Praktikum 2 tiga controller (single action controller)
// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 3
Route::get('/', [HomeController::class,'index']); //NO 1
// Route prefix NO 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
    Route::get('/riri-story-books', [ProductController::class, 'storyBooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kidsSongs']);
});

// Route param NO 3
Route::get('/news', [NewsController::class, 'listNews']);
Route::get('/news/{title}', [NewsController::class, 'news']);

// Route prefix NO 4
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});