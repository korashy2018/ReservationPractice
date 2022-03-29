<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\MiniHouse;
use Illuminate\Database\Seeder;

class MiniHouseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $miniHouses =[
            [
                "area" => 160,
                "number_of_rooms" => 4,
                "number_of_bath_rooms" => 3,
                "has_internet" => true,
                "has_parking" => true
            ],
            [
                "area" => 110,
                "number_of_rooms" => 2,
                "number_of_bath_rooms" => 1,
                "has_internet" => true,
                "has_parking" => false
            ],
            [
                "area" => 125,
                "number_of_rooms" => 3,
                "number_of_bath_rooms" => 2,
                "has_internet" => true,
                "has_parking" => true
            ],
        ];
        foreach ($miniHouses as $miniHouse){
            MiniHouse::create($miniHouse);
        }
    }
}
