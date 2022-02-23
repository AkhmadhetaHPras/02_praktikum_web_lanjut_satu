<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);