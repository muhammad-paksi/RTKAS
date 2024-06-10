<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akun;
use App\Models\Pengurus;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        KartuKeluarga::factory(5)->create();
        Penduduk::factory(5)->create();
        $this->call([AkunSeeder::class,]);
        // Akun::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
