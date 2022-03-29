<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                "type" => "Sedan",
                "model" => "Bmw 530e",
                "year" => "2021",
                "color" => "red",
                "number_of_passengers" => 5
            ],
            [
                "type" => "Sedan",
                "model" => "Mercedes e200",
                "year" => "2021",
                "color" => "black",
                "number_of_passengers" => 5
            ],
            [
                "type" => "Sport",
                "model" => "Ford Mustang",
                "year" => "2017",
                "color" => "white",
                "number_of_passengers" => 2
            ],
        ];
        foreach ($cars as $car){
            Car::create($car);
        }
    }
}
