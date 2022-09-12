<?php

namespace Database\Factories;

use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiMapel>
 */
class NilaiMapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $siswa_id = Siswa::all('_id');
        $lastData1 = count($siswa_id) - 1;
        $random_siswa = rand(0, $lastData1);

        $mapel_id = Mapel::all('_id');
        $lastData2 = count($mapel_id) - 1;
        $random_mapel = rand(0, $lastData2);

        return [
            'siswa_id' => $siswa_id[$random_siswa], // $siswa_id[$random_siswa]
            'mapel_id' => $mapel_id[$random_mapel], // $mapel_id[$random_mapel]
            'ls_1' => 100,
            'ls_2' => 100,
            'ls_3' => 100,
            'ls_4' => 100,
            'uh_1' => 100,
            'uh_2' => 100,
            'uts' => 100,
            'uas' => 100,
            'rata_rata' => 100
        ];
    }
}
