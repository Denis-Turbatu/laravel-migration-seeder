<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('it_IT');
        $newTrain = new Train();
        $newTrain->company = $faker->word(['Trenitalia', 'Italo', 'Intercity', 'FrecciaRossa']);
        $newTrain->departure_station = $faker->word(['Torino', 'Roma Termini', 'Milano Centrale', 'Firenze S. Maria Novella', 'Napoli']);
        $newTrain->arrival_station = $faker->word(['Torino', 'Roma Termini', 'Milano Centrale', 'Firenze S. Maria Novella', 'Napoli']);
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_code = $faker->numberBetween(000000, 999999);
        $newTrain->carriage_number = $faker->numberBetween(1, 12);
        $newTrain->on_time = $faker->boolean();
        $newTrain->cancelled = $faker->boolean();
        $newTrain->timestamps();
    }
}
