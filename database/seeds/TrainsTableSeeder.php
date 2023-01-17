<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'train_number' => 1044,
                'destination' => 'Milano Centrale',
                'departure_time' => '2023-01-17 20:15:10',
            ],
            [
                'train_number' => 1010,
                'destination' => 'Pordenone',
                'departure_time' => '2023-01-20 10:45:50',
            ],
            [
                'train_number' => 1999,
                'destination' => 'Paris',
                'departure_time' => '2023-03-06 16:05:00',
            ],
        ];

        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->train_number = $elem['train_number'];
            $newTrain->destination = $elem['destination'];
            $newTrain->departure_time = $elem['departure_time'];
            $newTrain->save();
        }
    }
}
