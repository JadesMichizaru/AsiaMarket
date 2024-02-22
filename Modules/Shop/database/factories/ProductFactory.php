<?php

namespace Modules\Shop\database\factories;

use Illuminate\Support\Str;
use Modules\Shop\app\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Shop\app\Models\Product::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        $name = fake()->words(2, true);

        return [
            'sku' => fake()->isbn10,
            'type' => Product::SIMPLE,
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => fake()->randomFloat,
            'status' => Product::ACTIVE,
            'publish_date' => now(),
            'excerpt' => fake()->text(),
            'body' => fake()->text(),
        ];
    }
}

