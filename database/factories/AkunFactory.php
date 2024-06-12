<?php

namespace Database\Factories;

use App\Models\Penduduk;  // Pastikan model Penduduk diimpor dengan benar
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;


class AkunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $warga = Penduduk::all()->pluck('nik')->toArray();
        
        
        if (!is_array($warga)) {
            throw new InvalidArgumentException('Penduduk::all()->pluck("nik") must return an array.');
        }

        $nik = !empty($warga) ? fake()->randomElement($warga) : null;
        
        return [
            'username' => 'ravi',
            'password' => Hash::make('ravi'),
            'level' => 'admin',
            'nik' => $nik,
        ];
    }
}
