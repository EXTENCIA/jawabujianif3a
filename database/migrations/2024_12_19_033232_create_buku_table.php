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
    Schema::create('buku', function (Blueprint $table) {
        $table->string('nobuku')->primary();
        $table->string('namabuku');
        $table->integer('jumlahbuku');
        $table->date('tahunterbit');
        $table->string('penerbit');
        $table->string('pengarang');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
