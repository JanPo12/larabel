<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTipusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        DB::table('pokemon_tipus')->insert([
            'id' => 1,
            'pokemon_id' => 1,
            'tipus_id' => 2
        ]);
        DB::table('pokemon_tipus')->insert([
            'id' => 2,
            'pokemon_id' => 4,
            'tipus_id' => 3
        ]);
        DB::table('pokemon_tipus')->insert([
            'id' => 3,
            'pokemon_id' => 7,
            'tipus_id' => 4
        ]);
        DB::table('pokemon_tipus')->insert([
            'id' => 4,
            'pokemon_id' => 25,
            'tipus_id' => 5
        ]);
        DB::table('pokemon_tipus')->insert([
            'id' => 5,
            'pokemon_id' => 1,
            'tipus_id' => 6
        ]);
    }
}
