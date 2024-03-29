<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{

    protected $model = Project::class;
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
            'service_id'=>random_int(1, Service::count()),
        ];
    }
}
