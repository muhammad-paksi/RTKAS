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
            $table->timestamps();

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
