<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function insertElq(Request $request){
        $anggota = new anggota();
        $anggota->nama = $request->input('nama');
        $anggota->npm = $request->input('npm');
        $anggota->save();
        return view('/pendaftaran', [
            'pesan' => 'Anda Berhasil Mendaftar'
        ]);
    }

    public function tampilData(){
        $anggota = anggota::all();
        return view('daftarAnggota', ['anggotas'=>$anggota]);
    }
}
