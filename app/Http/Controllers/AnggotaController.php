<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function inputAnggota()
    {
        return view('inputanggota');
    }

    public function tampilanAnggota()
{
    $anggota = Anggota::all();
    return view('tampilananggota', compact('anggota'));
}
    public function simpanAnggota(Request $request)
    {
        Anggota::create([
            'noanggota' => $request->noanggota,
            'namaanggota' => $request->namaanggota,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'tanggaldaftar' => now(),
        ]);

        return view('inputanggota') ;
    }
}
