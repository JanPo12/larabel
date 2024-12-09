<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atacs extends Model
{
    public function pokemon_atacs()
    {
        return $this->belongsToMany(pokemon::class);
    }
}
