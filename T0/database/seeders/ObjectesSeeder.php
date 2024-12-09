<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('objectes')->insert([
            'id' => 1,
            'nom' => 'Poké Ball',
            'descripcio' => 'Dispositivo con diseño capsular que captura Pokémon salvajes. Se lanza como una bola contra el blanco.',
            'sprite' => ''
        ]);
        DB::table('objectes')->insert([
            'id' => 2,
            'nom' => 'Poción',
            'descripcio' => 'Medicina en espray que cura heridas y restaura 20 PS de un Pokémon.',
            'sprite' => ''
        ]);
        DB::table('objectes')->insert([
            'id' => 3,
            'nom' => 'Revivir',
            'descripcio' => 'Medicina que reanima a un Pokémon debilitado y le devuelve la mitad de sus PS.',
            'sprite' => ''
        ]);
        DB::table('objectes')->insert([
            'id' => 4,
            'nom' => 'Repelente',
            'descripcio' => 'Evita encuentros con Pokémon salvajes de nivel bajo durante un corto período de tiempo.',
            'sprite' => ''
        ]);
        DB::table('objectes')->insert([
            'id' => 5,
            'nom' => 'Restos',
            'descripcio' => 'Este objeto restaura gradualmente durante el combate los PS del Pokémon que lo lleva.',
            'sprite' => ''
        ]);
    }
}
