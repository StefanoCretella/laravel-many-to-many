<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Project 1',
            'description' => 'Description for project 1',
            'start_date' => '2024-01-01',
            'end_date' => '2024-12-31',
        ]);

        Project::create([
            'name' => 'Project 2',
            'description' => 'Description for project 2',
            'start_date' => '2024-02-01',
            'end_date' => '2024-11-30',
        ]);
    }
}
