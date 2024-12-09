<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LidersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('liders_gyms')->insert([
            'id' => 1,
            'nom' => 'Brock',
            'medalla' => 'Medalla Roca',
            'numero_gym' => 1,
            'ciutat' => 'Ciudad Plateada',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 2,
            'nom' => 'Misty',
            'medalla' => 'Medalla Cascada',
            'numero_gym' => 2,
            'ciutat' => 'Ciudad Celeste',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 3,
            'nom' => 'Teniente Surge',
            'medalla' => 'Medalla Trueno',
            'numero_gym' => 3,
            'ciutat' => 'Ciudad Carmín',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 4,
            'nom' => 'Erika',
            'medalla' => 'Medalla Arcoíris',
            'numero_gym' => 4,
            'ciutat' => 'Ciudad Azulona',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 5,
            'nom' => 'Koga/Sachiko',
            'medalla' => 'Medalla Alma',
            'numero_gym' => 5,
            'ciutat' => 'Ciudad Fucsia',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 6,
            'nom' => 'Sabrina',
            'medalla' => 'Medalla Pantano',
            'numero_gym' => 6,
            'ciutat' => 'Ciudad Azafrán',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 7,
            'nom' => 'Baline',
            'medalla' => 'Medalla Volcan',
            'numero_gym' => 7,
            'ciutat' => 'Isla Canela/Islas Espuma',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
        DB::table('liders_gyms')->insert([
            'id' => 8,
            'nom' => 'Giovanni/Azul',
            'medalla' => 'Medalla Tierra',
            'numero_gym' => 8,
            'ciutat' => 'Ciudad Verde',
            'id_gen' => 1,
            'id_tipus' => 1
        ]);
    }
}
