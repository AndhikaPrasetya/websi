<?php

namespace Database\Seeders;

use App\Models\DivisHumas;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DivisiHumasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Loop through the data and create VisiMisi records
        for ($i = 0; $i < 10; $i++) { // Ubah 2 menjadi jumlah data yang Anda inginkan
            DivisHumas::create([
                'nama' => $faker->name(),
                'angkatan' => $faker->year(), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                'jabatan' => $faker->word(), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                'foto' => $faker->image(null, 640, 480), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                
            ]);
        }
    }
}
