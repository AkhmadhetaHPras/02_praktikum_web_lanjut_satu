<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function listNews() {
        return "Halaman daftar berita";
    }

    public function news($title){
        return "Halaman berita dengan judul {$title}";
    }
}
