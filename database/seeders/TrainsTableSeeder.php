<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

// use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) {
            # code...

            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date() . ' ' . $faker->time();
            $train->arrival_time = $faker->date() . ' ' . $faker->time();
            $train->train_code = $faker->isbn10();
            $train->wagon_number = $faker->randomDigit();

            $train->save();
        }
    }
}
