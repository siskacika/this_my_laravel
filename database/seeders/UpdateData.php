<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UpdateData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $data = DB::table('masyarakats')->limit(500)->get();

        foreach ($data as $item) {
            // $randomKK = strtoupper($faker->lexify('??????')) . $faker->numerify('#########');
            $tanggal = $faker->dateTimeBetween('1970-01-01', '2005-12-31');

            $tgl = $tanggal->format('dmy');
            if ($faker->randomElement(['L', 'P']) == 'P') {
                $tgl = (intval(substr($tgl, 0, 2)) + 40) . substr($tgl, 2);
            }

            $kodeWilayah = '32' . $faker->numerify('####');
            $urut = $faker->numerify('####');
            $nik = $kodeWilayah . $tgl . $urut;

            DB::table('masyarakats')
                ->where('id', $item->id)
                ->update([
                    'nomor_ktp' => $nik
                ]);
        }
    }
}
