<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet;
use App\Models\solar_systems;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        $milkyway = solar_systems::where('name', 'Milky Way')->first();
        $andromeda = solar_systems::where('name', 'Andromeda Galaxy')->first();

        $planets = [
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 3390,
                'solar_system_id' => $milkyway->id
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 6052,
                'solar_system_id' => $milkyway->id
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
                'size_in_km' => 6378,
                'solar_system_id' => $milkyway->id
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
                'size_in_km' => 69911,
                'solar_system_id' => $milkyway->id
            ]
        ];

        foreach ($planets as $planet) {
            Planet::create($planet);
        }
    }
}
