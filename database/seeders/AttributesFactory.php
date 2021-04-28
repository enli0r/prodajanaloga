<?php

namespace Database\Factories;

use App\Models\Attributes;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attributes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "attribute name:".$this->faker->name,
            'attribute_value' => rand(1,100),
            'game_id' => rand(1,10),
        ];
    }
}
