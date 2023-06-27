<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{

    protected $model = Service::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->buildingNumber(),
            'contact'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'description'=>$this->faker->text(),
        ];
    }
}
