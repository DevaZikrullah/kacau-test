<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motor>
 */
class MotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mesin' => $this->faker->randomElement(['A', 'B' ,'C']),
            'tipe_suspensi' => $this->faker->randomElement(['Pararel Fork', 'Plunger Rear Suspension', 'Telescopic Fork', 'Telescopic Up Side Down', 'Swing Arm Rear Suspension']),
            'tipe_transmisi' => $this->faker->randomElement(['Otomatis', 'Manual']),
            'tahun_keluaran' => $this->faker->numberBetween(2015,2020),
            'warna' => $this->faker->randomElement(['Hitam' , 'Putih' ]),
            'harga' => $this->faker->numberBetween(10000000000,20000000000),
            'stok' => $this->faker->numberBetween(1,10)

        ];
    }
}
