<?php

namespace App\Http\Controllers;

use App\Models\{bahanbaku, catatbersih, coa, company, dip, kemasan, perizinan,pobpabrik,komposisi,peralatan,penimbangan, produk};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class Admin extends Controller
{
    //COA
    public function tampil_coa() {
        $id=Auth::user()->id;
        $data = coa::all()->where('user_id',$id);
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
        $id=Auth::user()->id;
        $hasil = [
            'coa_file' => $nama,
            'coa_nama' => $req['nama'],
            'user_id' => $id,
        ];

        coa::insert($hasil);
        // // user::deleted()
        return redirect('/coa');
    }

    //DIP
    public function tampil_dip() {
        $id=Auth::user()->id;
        $data = dip::all()->where('user_id',$id);
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
        $id=Auth::user()->id;
        $hasil = [
            'dip_file' => $nama,
            'dip_nama' => $req['nama'],
            'user_id' => $id,
        ];

        dip::insert($hasil);
        // // user::deleted()
        return redirect('/dip');
    }

    //perizinan
    public function tampil_perizinan() {
        $id=Auth::user()->id;
        $data = perizinan::all()->where('user_id',$id);
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
        $id=Auth::user()->id;
        $hasil = [
            'perizinan_file' => $nama,
            'perizinan_nama' => $req['nama'],
            'user_id' => $id,
        ];

        perizinan::insert($hasil);
        // // user::deleted()
        return redirect('/perizinan');
    }

    //pob
    public function tampil_pobpabrik() {
        $id=Auth::user()->id;
        $data = pobpabrik::all()->where('user_id',$id);
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
        $id=Auth::user()->id;
        $hasil = [
            'pobpabrik_file' => $nama,
            'pobpabrik_nama' => $req['nama'],
            'user_id' => $id,
        ];

        pobpabrik::insert($hasil);
        // // user::deleted()
        return redirect('/pobpabrik');
    }

    //catat bersh ruangan
    public function tambah_catatbersih(Request $req) {
        $id=Auth::user()->id;
        $hasil = [
            'catatbersih_produk' => $req['tahun']."-".$req['bulan']."-".'1',
            'catatbersih_batchnum' => $req['batchnum'],
            'catatbersih_prosedurnum' => $req['produk_nama'],
            'catatbersih_namaruang' => $req['namaruang'],
            'catatbersih_carabersih' => $req['carabersih'],
            'catatbersih_pelaksana' => $req['pelaksana'],
            'catatbersih_periksa' => $req['periksa'],
            'catatbersih_lantaidinding' => $req['lantaidinding']==null ? 0:1,
            'catatbersih_meja' => $req['meja']==null ? 0:1,
            'catatbersih_jendela' => $req['jendela']==null ? 0:1,
            'catatbersih_plafon' => $req['plafon']==null ? 0:1,
            'user_id' => $id,
        ];
        
        catatbersih::insert($hasil);
        
        return redirect('/pembersihanruangan');
    }

    public function tampil_penerimaanbb(){
        echo Auth::user()->name;
        // return view('catatan.penerimaanBB');
    }

    //tampil batch
    public function tampil_pengolahanbatch(){
        $id=Auth::user()->id;
        $kom = komposisi::all()->where('user_id',$id);
        $alat = peralatan::all()->where('user_id',$id);
        $nimbang = penimbangan::all()->where('user_id',$id);
        return view('catatan.pengolahanbatch', ['list_kom' => $kom,'list_alat'=>$alat, 'list_nimbang'=>$nimbang
    ]);
    }

    //komposisi
    public function tambah_komposisi(Request $req) {
        $id=Auth::user()->id;
        $hasil = [            
            'komposisi_id' => $req['id'],
            'kompisisi_nama' => $req['nama'],
            'komposisi_persen' => $req['persen'],
            'user_id' => $id,            
        ];
        
        komposisi::insert($hasil);
        
        return redirect('/pengolahanbatch');
    }

    //peralatan
    public function tambah_peralatan(Request $req) {
        $id=Auth::user()->id;
        $hasil = [
            'peralatan_id' => $req['kode'],
            'peralatan_nama' => $req['nama'],
            'user_id' => $id,
        ];
        
        peralatan::insert($hasil);
        
        return redirect('/pengolahanbatch');
    }

    //catat penimbangan
    public function tambah_penimbangan(Request $req) {
        $id=Auth::user()->id;
        $hasil = [
            'penimbangan_kodebahan' => $req['kode_bahan'],
            'penimbangan_namabahan' => $req['nama_bahan'],
            'penimbangan_loth' => $req['no_loth'],
            'penimbangan_jumlahbutuh' => $req['jumlah_butuh'],
            'penimbangan_jumlahtimbang' => $req['jumlah_timbang'],
            'penimbangan_timbangoleh' => $req['ditimbang'],
            'penimbangan_periksaoleh' => $req['diperiksa'],
            'user_id' => $id,
        ];
        
        penimbangan::insert($hasil);
        
        return redirect('/pengolahanbatch');
    }

    public function tambah_company(Request $req)
    {   $file = $req->file('upload');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'asset/logo/';
		$file->move($tujuan_upload,$nama);
        $id=Auth::user()->id;
        $hasil = [
            'company_nama' => $req['nama'],
            'company_alamat' => $req['alamat'],
            'company_telepon' => $req['telp'],
            'company_logo' => $nama,
            'user_id' => $id,
        ];

        company::insert($hasil);
        // // user::deleted()
        return redirect('/setting');
    }

    public function tambah_produk(Request $req)
    {
        $id=Auth::user()->id;
        $hasil = [
            'produk_nama' => $req['nama'],
            'produk_kode' => $req['kode'],
            'user_id' => $id,
        ];

        produk::insert($hasil);
        // // user::deleted()
        return redirect('/setting');
    }

    public function tambah_kemasan(Request $req)
    {
        $id=Auth::user()->id;
        $hasil = [
            'kemasan_nama' => $req['nama'],
            'user_id' => $id,
        ];

        kemasan::insert($hasil);
        // // user::deleted()
        return redirect('/setting');
    }

    public function tambah_bahanbaku(Request $req)
    {
        $id=Auth::user()->id;
        $hasil = [
            'bahanbaku_nama' => $req['nama'],
            'bahanbaku_kode' => $req['alamat'],
            'user_id' => $id,
        ];

        bahanbaku::insert($hasil);
        // // user::deleted()
        return redirect('/setting');
    }

    public function tampil_setting(){
        $id=Auth::user()->id;
        $kom = company::all()->where('user_id',$id);
        $produk = produk::all()->where('user_id',$id);
        $kemasan = kemasan::all()->where('user_id',$id);
        $bahanbaku = bahanbaku::all()->where('user_id',$id);
        return view('setting', ['list_com' => $kom,'list_produk'=>$produk, 'list_kemasan'=>$kemasan, 'list_bahanbaku'=>$bahanbaku
    ]);
    }

}