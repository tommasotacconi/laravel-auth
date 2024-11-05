<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    protected $fillable = [
        'name',
        'authors',
        'arguments',
        'programming_languages',
        'start_date',
        'end_date',
    ];

    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Function to create fake projects
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->name = $faker->name();
            $new_project->authors = '';
            for ($i = 0; $i < 5; $i++) {
                $new_project->authors .= " $faker->name()";
            };
            $new_project->arguments = $faker->text();
            $new_project->programming_languages = $faker->words(5, true);
            $new_project->start_date = $faker->dateTimeThisYear();
            $new_project->end_date = $faker->dateTimeThisYear();
            $new_project->save();
        }
    }
}
