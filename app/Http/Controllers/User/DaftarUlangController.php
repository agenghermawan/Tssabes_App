<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\re-registration;

class DaftarUlangController extends Controller
{
    public function index()
    {
        return view('User.DaftarUlang');
    }

    public function store(Request $request)
    {
        re-registration::create([
            'namaLengkap' => $request->namaLengkap,
            'email' => $request->email,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'usia' => $request->usia,
            'tinggiBadan' => $request->tinggiBadan,
            'beratBadan' => $request->beratBadan,
            'agama' => $request->agama,
            'asalSekolah' => $request->asalSekolah,
            'tingkatanSekolah' => $request->tingkatanSekolah,
            'unitLatihan' => $request->unitLatihan,
            'tingkatanSabuk' => $request->tingkatanSabuk,
            'riwayatKesehatan' => $request->riwayatKesehatan,
            'alamat' => $request->alamat,
            'noTelp' => $request->noTelp,
            'foto' => $request->file('foto')->storeAs('image/foto',$request->file('foto')->getClientOriginalName(),'public'),
            'akte' => $request->file('akte')->storeAs('image/akte',$request->file('akte')->getClientOriginalName(),'public'),
            'status' => $request->status,
          ]);
    }
}
