<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class DetailPinjam extends Model
{
    use HasFactory;
    protected $fillable = [
        'nopinjam',
        'noanggota',
        'nobuku',
        'tanggalpinjam',
        'tanggalkembali',
        'denda',
    ];


    // Jika Anda memiliki relasi dengan model Anggota dan Buku
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'noanggota', 'noanggota');
    }
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'nobuku', 'nobuku');
    }
}
