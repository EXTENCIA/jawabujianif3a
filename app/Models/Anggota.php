<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota'; // Nama tabel
    protected $primaryKey = 'noanggota'; // Menentukan primary key
public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'noanggota',
        'namaanggota',
        'alamat',
        'tanggal_lahir',
        'nomor_telepon',
        'email',
        'tanggaldaftar',
    ];

    public function detailPinjam()
    {
        return $this->hasMany(DetailPinjam::class, 'noanggota', 'noanggota');
    }
}
