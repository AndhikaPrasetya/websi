<?php

namespace Database\Seeders;

use App\Models\Bph;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $allowedJabatan = ['ketua', 'wakil ketua', 'sekertaris', 'bendahara'];
        // Loop through the data and create VisiMisi records
        for ($i = 0; $i < 10; $i++) { // Ubah 2 menjadi jumlah data yang Anda inginkan
            Bph::create([
                'nama' => $faker->name(),
                'angkatan' => $faker->year(), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                'jabatan' => $faker->randomElement($allowedJabatan), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                'foto' => $faker->image(null, 640, 480), // Ubah 3 menjadi jumlah kalimat misi yang Anda inginkan
                
            ]);
        }
    }
}
