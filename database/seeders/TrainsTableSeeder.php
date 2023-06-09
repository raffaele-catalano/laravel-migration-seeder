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

        for ($i=0; $i < 20; $i++) {
            # code...

            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date() . ' ' . $faker->time();
            $train->arrival_time = $faker->date() . ' ' . $faker->time();
            $train->train_code = $faker->isbn10();
            $train->wagons_number = $faker->numberBetween(10, 15);
            $train->is_in_time = rand(0, 1);
            $train->is_cancelled = rand(0, 1);

            $train->save();
        }
    }
}
