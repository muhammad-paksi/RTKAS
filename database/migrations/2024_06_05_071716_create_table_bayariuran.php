<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bayarIuran', function (Blueprint $table) {
            $table->id('id_bayar');
            $table->unsignedBigInteger('nik')->index();
            $table->unsignedBigInteger('id_notifikasi')->index();
            $table->text('bukti');
            $table->decimal('nominal', 10,2);
            $table->unsignedBigInteger('nik_kk')->index();
            $table->enum('status', ['belum', 'selesai'])->default('belum');
            $table->date('tanggal_bayar');
            $table->timestamps();
            
            $table->foreign('nik_kk')->references('nik_kk')->on('kk');
            $table->foreign('nik')->references('nik')->on('penduduk');
            $table->foreign('id_notifikasi')->references('id_notifikasi')->on('notifikasiIuran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayarIuran');
    }
};
