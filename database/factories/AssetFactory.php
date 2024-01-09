<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{

    protected $model = Asset::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->slug(),
            'quantity'=>random_int(10, 150),
            'price'=>$this->faker->numberBetween(5000, 50000),
            'address'=>$this->faker->address(),
            'description'=>$this->faker->text(),
            'service_id'=>random_int(1, Service::count())
        ];
    }
}
