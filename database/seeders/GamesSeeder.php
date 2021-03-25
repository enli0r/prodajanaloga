<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'League of Legends',
        ]);
        Game::create([
            'name' => 'Counter Strike:Global Offensive',
        ]);
        Game::create([
            'name' => 'Fortnite',
        ]);
    }
}
