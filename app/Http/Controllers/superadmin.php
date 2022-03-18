<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superadmin extends Controller
{
    public function tampil_dashboard () {
        return view("admin.dashboard");
    }

    public function tampil_pabrik () {
        return view("admin.tambahuser");
    }
    public function tampil_protap () {
        return view("admin.ubahprotap");
    }

}
