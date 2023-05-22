<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['name' => 'Project 1'],
            ['name' => 'Project 2'],
            ['name' => 'Project 3'],
            ['name' => 'Project 4'],
            ['name' => 'Project 5'],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
