<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Masyarakat;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MasyarakatSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 500; $i++) {
            Masyarakat::create([
                'nomor_kk'      => $faker->randomNumber(),
                'nomor_ktp'     => $faker->randomNumber(),
                'nama'          => $faker->name(),
                'alamat'        => $faker->address(),
                'jenis_kelamin' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
            ]);
        }
    }
}