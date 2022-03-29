<?php

namespace Database\Factories;

use App\Models\MiniHouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class MiniHouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MiniHouse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area'=>$this->faker->numberBetween(100,200),
            'number_of_rooms'=>$this->faker->numberBetween(1,3),
            'number_of_bath_rooms'=>$this->faker->numberBetween(1,2),
            'has_internet'=>$this->faker->boolean(),
            'has_parking'=>$this->faker->boolean()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
