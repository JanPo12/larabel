<?php


namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('tipus')->insert([
            'id' => 1,
            'nom' => 'Normal'
        ]);
        DB::table('tipus')->insert([
            'id' => 2,
            'nom' => 'Planta'
        ]);
        DB::table('tipus')->insert([
            'id' => 3,
            'nom' => 'Fuego'
        ]);
        DB::table('tipus')->insert([
            'id' => 4,
            'nom' => 'Agua'
        ]);
        DB::table('tipus')->insert([
            'id' => 5,
            'nom' => 'Electrico'
        ]);
        DB::table('tipus')->insert([
            'id' => 6,
            'nom' => 'Veneno'
        ]);
    }
}
