<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaranBaru()
    {
        $dataPendaftar = Register::all();
        return view('Admin.Pendaftaran.pendaftaranBaru',compact('dataPendaftar'));
    }
    public function pendaftaranUlang()
    {
        $dataPendaftar = Register::all();
        return view('Admin.Pendaftaran.PendaftaranUlang',compact('dataPendaftar'));
    }
}
