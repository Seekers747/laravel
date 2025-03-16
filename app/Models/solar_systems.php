<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solar_systems extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age_in_years'];

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
