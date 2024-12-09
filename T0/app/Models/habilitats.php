<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilitats extends Model
{
    public function pokemon_habilitats()
    {
        return $this->belongsToMany(pokemon::class);
    }
}
