<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames(){
        return "Halaman daftar product dengan kategori marbel-edu-games";
    }
    public function kidsGames(){
        return "Halaman daftar product dengan kategori marbel-and-friends-kids-games";
    }
    public function storyBooks(){
        return "Halaman daftar product dengan kategori riri-story-books";
    }
    public function kidsSongs(){
        return "Halaman daftar product dengan kategori kolak-kids-songs";
    }
}
