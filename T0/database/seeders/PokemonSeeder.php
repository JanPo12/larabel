<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('pokemon')->insert([
            'id' => 1,
            'nom' => 'Bulbasaur',
            'alçada' => '7',
            'pes' => '69',
            'hp' => 45,
            'atac' => 49,
            'defensa' => 49,
            'atac_esp' => 65,
            'defensa_esp' => 65,
            'velocitat' => 45,
            'descripcio' => 'Una rara semilla le fue plantada en el lomo al nacer. La planta brota y crece con este pokemon.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/1.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/shiny/1.png',
            'id_gen' => 1,
        ]);
        DB::table('pokemon')->insert([
            'id' => 4,
            'nom' => 'Charmander',
            'alçada' => '6',
            'pes' => '85',
            'hp' => 39,
            'atac' => 52,
            'defensa' => 43,
            'atac_esp' => 60,
            'defensa_esp' => 50,
            'velocitat' => 65,
            'descripcio' => 'La llama de su cola indica la fuerza vital de Charmander. Será brillante si está sano.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/4.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/shiny/4.png',
            'id_gen' => 1,
        ]);
        DB::table('pokemon')->insert([
            'id' => 7,
            'nom' => 'Squirtle',
            'alçada' => '5',
            'pes' => '90',
            'hp' => 44,
            'atac' => 48,
            'defensa' => 65,
            'atac_esp' => 50,
            'defensa_esp' => 64,
            'velocitat' => 43,
            'descripcio' => 'Se protege con su caparazón y luego contraataca lanzando agua a presión cuando tiene oportunidad.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/7.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/shiny/7.png',
            'id_gen' => 1,
        ]);
        DB::table('pokemon')->insert([
            'id' => 25,
            'nom' => 'Pikachu',
            'alçada' => '4',
            'pes' => '60',
            'hp' => 35,
            'atac' => 55,
            'defensa' => 40,
            'atac_esp' => 50,
            'defensa_esp' => 50,
            'velocitat' => 90,
            'descripcio' => 'Levanta su cola para vigilar los alrededores. A veces, puede ser alcanzado por un rayo en esa pose.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/25.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/shiny/25.png',
            'id_gen' => 1,
        ]);
    }
}
