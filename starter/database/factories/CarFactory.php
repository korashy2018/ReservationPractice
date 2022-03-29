<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->word,
            'model'=>$this->faker->word,
            'year'=>$this->faker->date('Y'),
            'color'=>$this->faker->word,
            'number_of_passengers'=>$this->faker->numberBetween(1,4)
        ];
    }


}
