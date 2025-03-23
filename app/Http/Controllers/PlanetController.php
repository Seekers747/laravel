<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Models\solar_systems;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        $planets_milkyway = solar_systems::with('planets')->where('name', 'Milky Way')->get();
        $planets_andromeda = solar_systems::with('planets')->where('name', 'Andromeda Galaxy')->get();
        return view('planets', compact('planets'));
    }

    public function show($planet)
    {
        $planetData = Planet::where('name', ucfirst($planet))->first();

        if ($planetData) {
            return view('planet-detail', compact('planetData'));
        }
    }
}
