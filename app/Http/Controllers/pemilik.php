<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class pemilik extends Controller
{
    public function tampil_aplicant () {
        $pabrik=9;
        $data = user::all()->where('pabrik',$pabrik)
        ->where('level',-1);
        return view("pemilik.aplicant",['data' => $data ]);
    }

    public function tolak (Request $req)  {
        $post = user::all()->where('id',  $req->id)->each->delete();
    }

    public function terima(Request $req) {

        // dd($req->id);
        $user = user::all()->where("id", $req->id)->first()->update([
            'level' => 3,
        ]);
    }

    public function tampil_karyawan () {
        $pabrik=9 ;
        $data = user::all()->where('pabrik',$pabrik)
        ->where('level','>',2);
        return view("pemilik.karyawan",['data' => $data ]);

    }
}
