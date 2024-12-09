<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtacsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('atacs')->insert([
            'id' => 1,
            'nom' => 'Látigo Cepa',
            'pp' => '25',
            'precisio' => '100',
            'potencia' => '45',
            'descripcio' => 'Látigo cepa causa daño y no tiene ningún efecto secundario.',
            'clase' => 'Fisico',
            'blanco' => 'Elegido',
            'efecto secundario' => 'Ninguno',
            'prioridad' => '0',
            'contacto' => 'Si',            
            'id_tipo' => 1
        ]);
        DB::table('atacs')->insert([
            'id' => 2,
            'nom' => 'Ascuas',
            'pp' => '25',
            'precisio' => '100',
            'potencia' => '40',
            'descripcio' => 'Ascuas causa daño y tiene una probabilidad de 10% de quemar.',
            'clase' => 'Especial',
            'blanco' => 'Elegido',
            'efecto secundario' => 'Quemar al objetivo(10%)',
            'prioridad' => '0',
            'contacto' => 'No',            
            'id_tipo' => 1
        ]);
        DB::table('atacs')->insert([
            'id' => 3,
            'nom' => 'Pistola Agua',
            'pp' => '25',
            'precisio' => '100',
            'potencia' => '40',
            'descripcio' => 'Pistola agua causa daño y no tiene ningún efecto secundario',
            'clase' => 'Especial',
            'blanco' => 'Elegido',
            'efecto secundario' => 'Ninguno',
            'prioridad' => '0',
            'contacto' => 'No',            
            'id_tipo' => 1
        ]);
        DB::table('atacs')->insert([
            'id' => 4,
            'nom' => 'Impactrueno',
            'pp' => '30',
            'precisio' => '100',
            'potencia' => '40',
            'descripcio' => 'Impactrueno causa daño y tiene una probabilidad de 10% de paralizar.',
            'clase' => 'Especial',
            'blanco' => 'Elegido',
            'efecto secundario' => 'Paralizar al objetivo(10%)',
            'prioridad' => '0',
            'contacto' => 'No',            
            'id_tipo' => 1
        ]);
        DB::table('atacs')->insert([
            'id' => 5,
            'nom' => 'A bocajarro',
            'pp' => '5',
            'precisio' => '100',
            'potencia' => '120',
            'descripcio' => 'A bocajarro causa daño y no tiene ningún efecto secundario, pero reduce en un nivel la defensa y la defensa especial del usuario.',
            'clase' => 'Fisico',
            'blanco' => 'Elegido',
            'efecto secundario' => 'Ninguno',
            'prioridad' => '0',
            'contacto' => 'Si',            
            'id_tipo' => 1
        ]);
    }
}
