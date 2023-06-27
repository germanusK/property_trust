<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Customer;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{

    protected $model = Schedule::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'asset_id'=>random_int(1, Asset::count()),
            'customer_id'=>random_int(1, Customer::count()),
            'due_date'=>$this->faker->dateTime()
        ];
    }
}
