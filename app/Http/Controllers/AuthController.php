<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
// use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\user;
use App\Models\user as ModelsUser;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('auth.login');
        // $hhas =web
        // dd($hhas);
    }

    public function login(Request $request)
    {

        $data = [
            'nama'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];
        Auth::attempt($data);
        // dd(Auth::user());
        // echo Auth::user()->username;
        if (Auth::attempt($data)) { // true sekalian session field di users nanti bisa dipanggil via Auth
            echo "Login Success";
            return redirect('/setting');

        } else { // false

            //Login Fail
            echo "Login fail";
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $user = new User;
        $user->nama = ucwords(strtolower($request->username));
        $user->namadepan = $request->namadepan;
        $user->namabelakang = $request->namabelakang;
        $user->level = 0;
        $user->password = bcrypt($request->password);
        $simpan = $user->save();

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect('/login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect('showregister');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect('login');
    }
}
