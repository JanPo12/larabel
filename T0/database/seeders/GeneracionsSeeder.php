<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneracionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('generacions')->insert([
            'id' => 1,
            'nom' => 'Generación 1',
            'regio' => 'Kanto'
        ]);
        DB::table('generacions')->insert([
            'id' => 2,
            'nom' => 'Generación 2',
            'regio' => 'Johto'
        ]);
        DB::table('generacions')->insert([
            'id' => 3,
            'nom' => 'Generación 3',
            'regio' => 'Hoenn'
        ]);
        DB::table('generacions')->insert([
            'id' => 4,
            'nom' => 'Generación 4',
            'regio' => 'Sinnoh'
        ]);
        DB::table('generacions')->insert([
            'id' => 5,
            'nom' => 'Generación 5',
            'regio' => 'Teselia'
        ]);
        DB::table('generacions')->insert([
            'id' => 6,
            'nom' => 'Generación 6',
            'regio' => 'Kalos'
        ]);
        DB::table('generacions')->insert([
            'id' => 7,
            'nom' => 'Generación 7',
            'regio' => 'Alola'
        ]);
        DB::table('generacions')->insert([
            'id' => 8,
            'nom' => 'Generación 8',
            'regio' => 'Galar'
        ]);
        DB::table('generacions')->insert([
            'id' => 9,
            'nom' => 'Generación 9',
            'regio' => 'Paldea'
        ]);
    }
}
