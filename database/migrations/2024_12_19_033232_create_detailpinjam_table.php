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
    Schema::create('detail_pinjams', function (Blueprint $table) {
        $table->string('nopinjam')->primary();
         $table->string('noanggota');
$table->foreign('noanggota')
    ->references('noanggota')
    ->on('anggota')
    ->onDelete('cascade');

$table->string('nobuku');
$table->foreign('nobuku')
    ->references('nobuku')
    ->on('buku')
    ->onDelete('cascade');


$table->string('denda');
        $table->date('tanggalpinjam');
        $table->date('tanggalkembali');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpinjam');
    }
};
