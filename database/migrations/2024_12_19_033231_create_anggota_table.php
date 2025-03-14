<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('anggota', function (Blueprint $table) {
        $table->string('noanggota')->primary();
        $table->string('namaanggota');
        $table->string('alamat');
        $table->date('tanggal_lahir');
        $table->string('nomor_telepon');
        $table->string('email')->unique();
        $table->date('tanggaldaftar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
