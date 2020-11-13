<?php

namespace Workshop\Domain\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Workshop\Domain\Models\Item;


class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'description' => $this->faker->text,
        ];
    }
}
