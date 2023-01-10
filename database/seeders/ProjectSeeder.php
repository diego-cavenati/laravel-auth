<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $project = new Project;
        $project->title = $faker->randomElement(['Laravel Lorem', 'Laravel Ipsum']);
        $project->description = $faker->paragraph();
        $project->vote = $faker->randomElement(['1', '2', '3', '4', '5']);
        $project->link = $faker->randomElement(['https://lorem1', 'https://lorem2', 'https://lorem3', 'https://lorem4', 'https://lorem5']);
        $project->save();
    }
}
