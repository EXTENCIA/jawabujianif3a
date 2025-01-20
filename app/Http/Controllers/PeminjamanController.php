<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\DetailPinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PeminjamanController extends Controller
{

    public function index()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        return view('index', compact('anggota', 'buku'));
    }

    public function store(Request $request)
    {

        DetailPinjam::create([
            'nopinjam' => $request->nopinjam,
            'noanggota' => $request->noanggota,
            'nobuku' => $request->nobuku,
            'tanggalpinjam' => $request->tanggalpinjam,
            'tanggalkembali' => $request->tanggalkembali,
            'denda' => $request->denda,
        ]);

        return redirect()->back();

    }
    // Menampilkan data peminjaman
    public function tampilan()
    {
        $detailPinjam = DetailPinjam::with(['anggota', 'buku'])->get();
        return view('tampilan', compact('detailPinjam'));
    }
}
