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
        $newTrain->company = $this->getRandomCompany($faker);
        do {
            $newTrain->departure_station = $this->getRandomStation($faker);
            $newTrain->arrival_station = $this->getRandomStation($faker);
        } while ($newTrain->departure_station === $newTrain->arrival_station);
        $newTrain->departure_date = $faker->dateTimeBetween('0 week', '+1 week')->format('Y-m-d');
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_code = $faker->numerify('id-######');
        $newTrain->carriage_number = $faker->numberBetween(1, 12);
        $newTrain->seats_number = $faker->numberBetween(150, 600);
        $newTrain->price_ticket = $faker->randomFloat(2, 17.99, 79.99);
        $newTrain->on_time = $faker->boolean();
        $newTrain->cancelled = $faker->boolean();
        $newTrain->save();
        // dd($newTrain);
    }

    private function getRandomCompany($faker): string
    {
        $companies = ['Trenitalia', 'Italo', 'Intercity', 'FrecciaRossa'];
        return $faker->randomElement($companies);
    }

    private function getRandomStation($faker): string
    {
        $stations = ['Torino', 'Roma Termini', 'Milano Centrale', 'Firenze S. Maria Novella', 'Napoli'];
        return $faker->randomElement($stations);
    }
}
