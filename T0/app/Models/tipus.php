<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipus extends Model
{
    protected $table = 'tipus';
    public function pokemon_tipus()
    {
        return $this->belongsToMany(pokemon::class);
    }
}
