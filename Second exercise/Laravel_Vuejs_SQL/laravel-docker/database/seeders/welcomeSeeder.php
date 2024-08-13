<?php

namespace Database\Seeders;

use App\Models\welcome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class welcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
            welcome::create([
                'welcome' => "Hello world !!!!",
            ]);
    }
}
