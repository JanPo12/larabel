<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evolucions extends Model
{
    public function pokemon_evolucions()
    {
        return $this->belongsTo(pokemon::class);
    }
}
