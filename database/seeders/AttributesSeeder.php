<?php

namespace Database\Seeders;

use App\Models\Attributes;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attributes::create([
            'name' => 'division',
            'game_id' => 1
        ]);

        Attributes::create([
            'name' => 'rank',
            'game_id' => 2
        ]);
    }
}
