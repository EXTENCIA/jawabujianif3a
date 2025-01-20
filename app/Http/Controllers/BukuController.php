<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function inputBuku()
    {
        return view('inputbuku');
    }
    public function tampilanBuku()
{
    $buku = Buku::all();
    return view('tampilanbuku',compact('buku'));
}
    public function simpanBuku(Request $request)
    {
        Buku::create([
            'nobuku' => $request->nobuku,
            'namabuku' => $request-> namabuku,
            'jumlahbuku' => $request-> jumlahbuku,
            'tahunterbit' => $request->tahunterbit,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,

        ]);

        return view('inputbuku');
    }
}
