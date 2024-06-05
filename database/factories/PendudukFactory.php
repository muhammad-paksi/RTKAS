<?php

namespace Database\Factories;

use App\Models\KartuKeluarga;  // Tambahkan ini
use Illuminate\Database\Eloquent\Factories\Factory;
use InvalidArgumentException;

class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kk = KartuKeluarga::all()->pluck('nik_kk')->toArray();

        if (!is_array($kk)) {
            throw new InvalidArgumentException('KartuKeluarga::all()->pluck("nik_kk") must return an array.');
        }

        $nik_kk = !empty($kk) ? fake()->randomElement($kk) : null;

        return [
            'nik' => fake()->nik(),
            'nama_lengkap' => fake()->name(),
            'tanggal_lahir' => fake()->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d'),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghuchu']),
            'status' => fake()->randomElement(['tetap', 'sementara']),
            'nik_kk' => $nik_kk,
        ];
    }
}
