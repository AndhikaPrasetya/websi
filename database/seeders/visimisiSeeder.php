<?php

namespace Database\Seeders;

use App\Models\Visi_Misi;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class VisiMisiSeeder extends Seeder
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
            Visi_Misi::create([
                'visi' => $faker->paragraph(1),
                'misi' => $faker->paragraph(3), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
            ]);
        }
    }
}
