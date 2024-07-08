<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table pegawai
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => 'joni',
        //     'pegawai_jabatan' => 'Web Developer',
        //     'pegawai_umur' => 40,
        //     'pegawai_alamat' => 'Jl. Bandung'
        // ]);

        //seeder dengan faker
        $faker = Faker::create('id_Id');

        //melakukan perulangan dengan for
            for ($i = 1; $i <= 50; $i++){
                //insert data ke table pegawai dengan Faker
                DB::table('pegawai')->insert([
                    'pegawai_nama' => $faker->name,
                    'pegawai_jabatan' => $faker->jobTitle,
                    'pegawai_umur' => $faker->numberBetween(25,30),
                    'pegawai_alamat' => $faker->address
                ]);

            }
    }
}
