<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemilik extends Controller
{
    public function tampil_aplicant () {
        return view("pemilik.aplicant");
    }

    public function tampil_karyawan () {
        return view("pemilik.karyawan");
    }
}
