<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=Car::class;
    public function definition()
    {
        return [
            'name'=> $this->faker->randomElement(['Malo auto', 'Limuzina', 'Karavan', 'Dzip']),
            'year'=>now(),
            'engine'=> $this->faker->randomDigit(),
            'code'=> $this->faker->unique()->numberBetween(1,1000),
            'air_condition'=> $this->faker->numberBetween(0,1),
            'brand'=>$this->faker->numberBetween(1,3),
            
        ];
    }
}
