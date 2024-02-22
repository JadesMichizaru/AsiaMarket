<?php

namespace Modules\Shop\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Shop\app\Models\AttributeOption::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [];
    }
}

