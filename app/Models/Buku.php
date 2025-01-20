<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'nobuku';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nobuku',
        'namabuku',
        'jumlahbuku',
        'tahunterbit',
        'penerbit',
        'pengarang',
    ];
    public function detailPinjam()
    {
        return $this->hasMany(DetailPinjam::class, 'nobuku', 'nobuku');
    }
}
