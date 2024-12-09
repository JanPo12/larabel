<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('habilitats')->insert([
            'id' => 1,
            'nom' => 'Hedor',
            'descripcio' => 'Puede amedrentar a un Pokémon al atacarlo debido al mal olor que emana.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 2,
            'nom' => 'Llovizna',
            'descripcio' => 'Hace que llueva al entrar en combate.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 3,
            'nom' => 'Impulso',
            'descripcio' => 'Aumenta su velocidad en cada turno.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 65,
            'nom' => 'Espesura',
            'descripcio' => 'Potencia sus movimientos de tipo planta cuando le quedan pocos PS.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 66,
            'nom' => 'Mar llamas',
            'descripcio' => 'Potencia sus movimientos de tipo fuego cuando le quedan pocos PS.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 67,
            'nom' => 'Torrente',
            'descripcio' => 'Potencia sus movimientos de tipo agua cuando le quedan pocos PS.',
        ]);
        DB::table('habilitats')->insert([
            'id' => 9,
            'nom' => 'Electricidad estática',
            'descripcio' => 'La electricidad estática que lo envuelve puede paralizar al Pokémon que lo ataque con un movimiento de contacto.',
        ]);
    }
}
