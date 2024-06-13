<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysWithCascadeToTables extends Migration
{
    public function up()
    {
        Schema::table('penduduk', function (Blueprint $table) {
            $table->foreign('nik_kk')->references('nik_kk')->on('kk')->onDelete('cascade');
        });

        Schema::table('bayarIuran', function (Blueprint $table) {
            $table->foreign('nik_kk')->references('nik_kk')->on('kk')->onDelete('cascade');
        });
        
        Schema::table('akun', function (Blueprint $table) {
            $table->foreign('nik')->references('nik')->on('penduduk')->onDelete('cascade');
        });
        
        Schema::table('bayarIuran', function (Blueprint $table) {
            $table->foreign('nik')->references('nik')->on('penduduk')->onDelete('cascade');
        });
        

        // Tambahkan foreign key constraints dengan onDelete('cascade') untuk tabel lain yang berelasi
    }

    public function down()
    {
        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropForeign(['nik_kk']);
        });

        Schema::table('bayarIuran', function (Blueprint $table) {
            $table->dropForeign(['nik_kk']);
        });
        
        Schema::table('bayarIuran', function (Blueprint $table) {
            $table->dropForeign(['nik']);
        });

        Schema::table('akun', function (Blueprint $table) {
            $table->dropForeign(['nik']);
        });
        // Tambahkan penghapusan foreign key dari tabel lain yang berelasi
    }
}
