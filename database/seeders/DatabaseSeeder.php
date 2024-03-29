<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Grade;
use App\Models\Project;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use Database\Factories\ServiceCategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(12)->create();
        Service::factory(6)->create();
        Asset::factory(50)->create();
        Project::factory(20)->create();
        Customer::factory(78)->create();
        Schedule::factory(142)->create();
        ServiceCategoryFactory::factory(14)->create();
    }
}
