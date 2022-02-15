<?php

namespace App\Http\Controllers;

use App\Models\{coa,dip,perizinan,pobpabrik};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class Admin extends Controller
{
    //COA
    public function tampil_coa() {
        $data = coa::all();
        return view('/coa', ['list_coa' => $data]);
    }

    public function hapus_coa($id)
    {
        $data = coa::all()->where('coa_id', $id);
        // dd($data);
        unlink("asset/coa/".$data[0]['coa_file']);
        $post = coa::all()->where('coa_id', $id)->each->delete();
        
        return redirect('/coa');
    }

    public function tambah_coa(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'asset/coa/';
		$file->move($tujuan_upload,$nama);
        $hasil = [
            'coa_file' => $nama,
            'coa_nama' => $req['nama'],
        ];

        coa::insert($hasil);
        // // user::deleted()
        return redirect('/coa');
    }

    //DIP
    public function tampil_dip() {
        $data = dip::all();
        return view('/dip', ['list_dip' => $data]);
    }

    public function hapus_dip($id)
    {
        $data = dip::all()->where('dip_id', $id);
        // dd($data);
        unlink("asset/dip/".$data[0]['dip_file']);
        $post = dip::all()->where('dip_id', $id)->each->delete();
        
        return redirect('/dip');
    }

    public function tambah_dip(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'asset/dip/';
		$file->move($tujuan_upload,$nama);
        $hasil = [
            'dip_file' => $nama,
            'dip_nama' => $req['nama'],
        ];

        dip::insert($hasil);
        // // user::deleted()
        return redirect('/dip');
    }

    //perizinan
    public function tampil_perizinan() {
        $data = perizinan::all();
        return view('/perizinan', ['list_perizinan' => $data]);
    }

    public function hapus_perizinan($id)
    {
        $data = perizinan::all()->where('perizinan_id', $id);
        // dd($data);
        unlink("asset/perizinan/".$data[0]['perizinan_file']);
        $post = perizinan::all()->where('perizinan_id', $id)->each->delete();
        
        return redirect('/perizinan');
    }

    public function tambah_perizinan(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'asset/perizinan/';
		$file->move($tujuan_upload,$nama);
        $hasil = [
            'perizinan_file' => $nama,
            'perizinan_nama' => $req['nama'],
        ];

        perizinan::insert($hasil);
        // // user::deleted()
        return redirect('/perizinan');
    }

    //pob
    public function tampil_pobpabrik() {
        $data = pobpabrik::all();
        return view('/pobpabrik', ['list_pobpabrik' => $data]);
    }

    public function hapus_pobpabrik($id)
    {
        $data = pobpabrik::all()->where('pobpabrik_id', $id);
        // dd($data);
        unlink("asset/pobpabrik/".$data[0]['pobpabrik_file']);
        $post = pobpabrik::all()->where('pobpabrik_id', $id)->each->delete();
        
        return redirect('/pobpabrik');
    }

    public function tambah_pobpabrik(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'asset/pobpabrik/';
		$file->move($tujuan_upload,$nama);
        $hasil = [
            'pobpabrik_file' => $nama,
            'pobpabrik_nama' => $req['nama'],
        ];

        pobpabrik::insert($hasil);
        // // user::deleted()
        return redirect('/pobpabrik');
    }
}