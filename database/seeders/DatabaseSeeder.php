<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Post;
use App\Models\User;
use App\Models\Attributes;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;
use Database\Seeders\GamesSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\MessagesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersSeeder::class);
        //$this->call(MessagesSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(AttributesSeeder::class);
        //$this->call(PostsSeeder::class);
    }
}
