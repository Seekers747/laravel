<?php

namespace Database\Seeders;

use App\Models\solar_systems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolarSystemsSeeder extends Seeder
{
    public function run(): void
    {
        $solar_systems = [
            ['name' => 'Milky Way', 'age_in_years' => 13000000000],
            ['name' => 'Andromeda Galaxy', 'age_in_years' => 10010000000]
        ];

        foreach ($solar_systems as $solar_system) {
            solar_systems::create($solar_system);
        }
    }
}
