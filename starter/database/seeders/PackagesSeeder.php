<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                "days" => 2,
                "name" => "2 Days",
            ],
            [
                "days" => 14,
                "name" => "2 weeks",
            ],
            [
                "days" => 30,
                "name" => "1 Month",
            ]
        ];
        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
