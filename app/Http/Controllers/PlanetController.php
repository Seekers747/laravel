<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Haal alle planeten op
    public function index()
    {
        // Haal alle planeten uit de database via Eloquent
        $planets = Planet::all();
        return view('planets', compact('planets'));
    }

    // Toon een specifieke planeet
    public function show($planet)
    {
        // Haal de planeet op op basis van de naam
        $planetData = Planet::where('name', ucfirst($planet))->first();

        if ($planetData) {
            return view('planet-detail', compact('planetData'));
        } else {
            return response("Planet does not exist", 404);
        }
    }
}
