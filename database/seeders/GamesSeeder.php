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
            'slug' => 'lol',
            'image' => 'https://i.ibb.co/x8Kqd1c/lol-post-slika.jpg'
        ]);
        Game::create([
            'name' => 'Counter Strike:Global Offensive',
            'slug' => 'csgo',
            'image' => 'https://i.ibb.co/VjZH79Y/csgo-post-slika.jpg'
        ]);
        Game::create([
            'name' => 'Fortnite',
            'slug' => 'fortnite',
            'image' => 'https://i.ibb.co/NY6WXyL/fortnite-post-slika.jpg'
        ]);
    }
}
