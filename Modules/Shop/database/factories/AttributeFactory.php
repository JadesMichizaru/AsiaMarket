<?php

namespace Modules\Shop\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Shop\app\Models\Attribute::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

