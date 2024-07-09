<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //data faker indonesia
                $faker = Faker::create('id_ID');

                //membuat data dummy sebanyak 10 record dengan for
                for ($i=1; $i <= 10; $i++) {

                    //insert data dummy staff dengan faker
                    DB::table('staff')->insert([
                        'nama' => $faker->name,
                        'alamat' => $faker->address,
                    ]);
                }
    }
}
