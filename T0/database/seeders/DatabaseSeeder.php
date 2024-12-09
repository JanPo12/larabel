<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PokemonSeeder::class,
            LidersSeeder::class,
            AtacsSeeder::class,
            GeneracionsSeeder::class,
            HabilitatsSeeder::class,
            ObjectesSeeder::class,
            PokemonTipusSeeder::class,
            TipusSeeder::class,
            HabilitatsPokemonSeeder::class
        ]);
    }
}