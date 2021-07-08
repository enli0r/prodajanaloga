<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Seeder;
use PDO;

class AttributeValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $divisions = ['iron', 'bronze', 'silver', 'gold', 'platinum', 'diamond', 'master', 'grandmaster', 'challenger'];
        $servers = ['eune', 'euw', 'na'];
        $ranks = ['silver', 'gold nova', 'master guardian', 'dmg', 'le', 'lem', 'supreme', 'global elite'];

        foreach($divisions as $division){
            AttributeValue::create([
                'attribute_value' => $division,
                'attribute_id' => 1
            ]);
        }

        foreach($servers as $server){
            AttributeValue::create([
                'attribute_value' => $server,
                'attribute_id' => 2
            ]);
        }

        foreach($ranks as $rank){
            AttributeValue::create([
                'attribute_value' => $rank,
                'attribute_id' => 3
            ]);
        }
    }
}
