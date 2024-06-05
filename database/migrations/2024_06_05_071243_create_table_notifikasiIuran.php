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
            $table->text('judul');
            $table->unsignedBigInteger('id_iuran')->index();
            $table->date('tanggal');
            $table->text('informasi')->nullable();
            $table->decimal('nominal', 10,2);
            $table->timestamps();
            
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
