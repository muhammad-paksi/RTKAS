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
        Schema::create('notifikasiIuran', function (Blueprint $table) {
            $table->id('id_notifikasi');
            $table->unsignedBigInteger('nik_kk')->index();
            $table->enum('status', ['belum', 'selesai'])->default('belum');
            $table->unsignedBigInteger('id_iuran')->index();
            $table->decimal('nominal', 10,2);
            $table->timestamps();

            $table->foreign('nik_kk')->references('nik_kk')->on('kk');
            $table->foreign('id_iuran')->references('id_iuran')->on('iuran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasiIuran');
    }
};
