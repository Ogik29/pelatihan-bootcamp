<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id = Kelas::all('_id');
        $lastData = count($id) - 1;
        $random_id = rand(0, $lastData);

        return [
            'nama' => fake()->name(),
            'kelas_id' => $id[$random_id]
        ];
    }
}
