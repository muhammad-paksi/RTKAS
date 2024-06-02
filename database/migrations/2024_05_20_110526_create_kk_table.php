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
        Schema::create('kk', function (Blueprint $table) {
            $table->id('nik_kk');
            $table->string('nama_kepala');
            $table->text('alamat_kk');
            $table->timestamps();
            // $table->unsignedBigInteger('id_alamat')->index();

            // $table->foreign('id_alamat')->references('id_alamat')->on('alamat');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kk');
    }
};
