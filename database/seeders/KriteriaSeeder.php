<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kriterium::create( [
            'nama_kriteria'=>'Transparansi dana',
            'bobot'=>0.3,
            'tipe'=>'b'
            ] );
            
            
                        
            Kriterium::create( [
            'nama_kriteria'=>'Efisien',
            'bobot'=>0.2,
            'tipe'=>'b'
            ] );
            
            
                        
            Kriterium::create( [
            'nama_kriteria'=>'Partisipasi warga',
            'bobot'=>0.2,
            'tipe'=>'b'
            ] );
            
            
                        
            Kriterium::create( [
            'nama_kriteria'=>'Tingkat darurat',
            'bobot'=>0.3,
            'tipe'=>'b'
            ] );
            
            
                        
            Kriterium::create( [
            'nama_kriteria'=>'Jumlah biaya',
            'bobot'=>0.15,
            'tipe'=>'c'
            ] );
            
            
                        
    }
}
