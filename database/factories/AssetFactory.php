<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'quantity'=>$this->faker->numberBetween(1, 100),
            'price'=>$this->faker->randomFloat(0, 1000, 132000),
            'address'=>$this->faker->address(),
            'description'=>$this->faker->realTextBetween()
        ];
    }
}
