<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Akun;
use App\Models\Penduduk;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengambil semua NIK dari tabel Penduduk
        $warga = Penduduk::all()->pluck('nik')->toArray();

        if (empty($warga)) {
            throw new \Exception('No Penduduk records found.');
        }

        // Membuat akun admin dengan username 'ravi' dan password 'ravi'
        Akun::create([
            'username' => 'ravi',
            'password' => Hash::make('ravi'),
            'level' => 'admin',
            'nik' => $warga[0], // Menggunakan NIK pertama dari daftar
        ]);

        // Membuat akun warga dengan username 'ravi' dan password '123'
        Akun::create([
            'username' => 'warga',
            'password' => Hash::make('123'),
            'level' => 'warga',
            'nik' => $warga[1], // Menggunakan NIK kedua dari daftar (pastikan ada setidaknya 2 NIK)
        ]);
    }
}
