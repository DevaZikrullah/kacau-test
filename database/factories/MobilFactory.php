<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mesin' => $this->faker->randomElement(['V8', 'V12']),
            'kapasitas_penumpang' => $this->faker->randomElement(['4', '6']),
            'tipe' => $this->faker->randomElement(['Otomatis', 'Manual']),
            'tahun_keluaran' => $this->faker->numberBetween(2015,2020),
            'warna' => $this->faker->randomElement(['Hitam' , 'Putih' ]),
            'harga' => $this->faker->numberBetween(1000000000000,2000000000000),
            'stok' => $this->faker->numberBetween(1,10)

        ];
    }
}
