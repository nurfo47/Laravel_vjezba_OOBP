<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brands;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandsFactory extends Factory
{
    protected $model=Brands::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['Mercedes','Audi','Citroen']),
            'country'=>$this->faker->randomElement(['DE','FR','AU', 'BA']),
            //
        ];
    }
}
