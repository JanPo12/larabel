<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    public function pokemon_tipus()
    {
        return $this->belongsToMany(tipus::class);
    }
    public function pokemon_habilitats()
    {
        return $this->belongsToMany(habilitats::class);
    }
    public function pokemon_atacs()
    {
        return $this->belongsToMany(atacs::class);
    }
    public function pokemon_evolucions()
    {
        return $this->hasMany(evolucions::class);
    }
}