<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryFactory extends Factory
{

    protected $model = ServiceCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id'=>random_int(1, Service::count()),
            'category_id'=>random_int(1, Category::count())
        ];
    }
}
