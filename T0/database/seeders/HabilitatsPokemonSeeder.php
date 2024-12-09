<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsPokemonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        DB::table(table: 'habilitats_pokemon')->insert([
            'id' => 1,
            'pokemon_id' => 1,
            'habilitats_id' => 65
        ]);
        DB::table(table: 'habilitats_pokemon')->insert([
            'id' => 2,
            'pokemon_id' => 4,
            'habilitats_id' => 66
        ]);
        DB::table(table: 'habilitats_pokemon')->insert([
            'id' => 3,
            'pokemon_id' => 7,
            'habilitats_id' => 67
        ]);
        DB::table(table: 'habilitats_pokemon')->insert([
            'id' => 4,
            'pokemon_id' => 25,
            'habilitats_id' => 9
        ]);
    }
}