<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $companies_name = ['Trenitalia', 'Italo', 'Trenoni'];
        $newTrain = new Train();
        $newTrain->company_name = $faker->randomElement($companies_name);
        $newTrain->starting_station = $faker->city();
        $newTrain->arriving_station = $faker->city();
        $newTrain->starting_hour = $faker->time();
        $newTrain->arriving_hour = $faker->time();
        $newTrain->train_date = $faker->dateTimeBetween('-2 week', '+2 week');
        $newTrain->train_code = $faker->regexify('[A-Z]{4}[0-9]{3}[A-Z]{2}');
        $newTrain->train_vagon = $faker->numberBetween(1, 20);
        $newTrain->on_time = $faker->boolean();
        $newTrain->canceled = $faker->boolean();
        $newTrain->save();
    }
}
