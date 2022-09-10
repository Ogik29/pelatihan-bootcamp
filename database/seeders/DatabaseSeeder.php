<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\NilaiMapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use MongoDB\Operation\Find;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('sandi')
        // ]);

        Kelas::factory(3)->create();

        Siswa::factory(1)->create();

        Mapel::create([
            'nama_mapel' => 'Matematika'
        ]);

        Mapel::create([
            'nama_mapel' => 'Bahasa Inggris'
        ]);

        Mapel::create([
            'nama_mapel' => 'Bahasa Indonesia'
        ]);

        Mapel::create([
            'nama_mapel' => 'IPA',
        ]);

        NilaiMapel::factory(1)->create();
    }
}
