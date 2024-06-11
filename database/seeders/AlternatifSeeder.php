<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alternatif;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alternatif::create( [
            'nama_alternatif'=>'Dana gotong royong bulanan',
            'penilaian'=>'0.3, 0.3, 0.3, 1, 1'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana Darurat untuk bantuan krisis',
            'penilaian'=>'0.2, 0.2, 0.2, 0.3, 0.3'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk acara HUT RI',
            'penilaian'=>'1, 1, 0.5, 0.2, 0.2'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk program kebersihan bulanan',
            'penilaian'=>'0.3, 0.4, 0.4, 0.4, 0.4'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk pengadaan peralatan untuk RT',
            'penilaian'=>'0.2, 0.2, 1, 0.3, 0.3'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Biaya operasional rapat RT',
            'penilaian'=>'0.4, 0.2, 0.2, 0.3, 0.4'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Biaya operasional PKK',
            'penilaian'=>'0.4, 1, 0.4, 0.4, 1'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk pelatihan workshop RT',
            'penilaian'=>'1, 0.3, 0.5, 1, 0.2'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk kegiatan social',
            'penilaian'=>'0.3, 0.3, 0.5, 0.2, 0.4'
            ] );
                        
            Alternatif::create( [
            'nama_alternatif'=>'Dana untuk pembangunan infrastruktur RT',
            'penilaian'=>'0.5, 0.2, 0.3, 0.6, 1'
            ] );
    }
}
