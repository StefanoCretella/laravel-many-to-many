<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run()
    {
        Technology::firstOrCreate(['name' => 'Laravel']);
        Technology::firstOrCreate(['name' => 'Vite']);
    }
}
