<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return "Halaman program karir";
    }
    public function magang(){
        return "Halaman program magang";
    }
    public function kunjungan(){
        return "Halaman program kunjungan industri";
    }
}
