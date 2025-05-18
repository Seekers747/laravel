<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RoleUserController;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PlanetController;

// Route naar de planetenlijst
Route::get('/planets', [PlanetController::class, 'index']);

// Route naar een specifieke planeet
Route::get('/planets/{planet}', [PlanetController::class, 'show']);

Route::get('/role-user', [RoleUserController::class, 'index']);



/*
$planets = [
    'Mars' => [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        'size_in_km' => 3390
    ],
    'Venus' => [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        'size_in_km' => 6052
    ],
    'Earth' => [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        'size_in_km' => 6378
    ],
    'Jupiter' => [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        'size_in_km' => 69911
    ],
];
*/