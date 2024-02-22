<?php

namespace Modules\Shop\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Shop\app\Models\Tag;
use Modules\Shop\app\Models\Product;
use Modules\Shop\app\Models\Category;
use Modules\Shop\app\Models\Attribute;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\app\Models\ProductAttribute;
use Modules\Shop\app\Models\ProductInventory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $user = User::first();

        Attribute::setDefaultAttributes();
        $this->command->info('Default Attributes seeded.');
        $attributeWeight = Attribute::where('code', Attribute::ATTR_WEIGHT)->first();

        Category::factory(10)->count(10)->create();
        $this->command->info('Categories seeded.');
        $randomCategoryIDs = Category::all()->random()->limit(2)->pluck('id');


        Tag::factory(10)->count(10)->create();
        $this->command->info('Tags seeded.');
        $randomTagIDs = Tag::all()->random()->limit(2)->pluck('id');


        for ($i = 1; $i <= 30; $i++) {
            $manageStock = (bool) random_int(0, 1);

            $product = Product::factory()->create([
                'user_id' => $user->id,
                'manage_stock' => $manageStock,
            ]);

            $product->categories()->sync($randomCategoryIDs);
            $product->tags()->sync($randomTagIDs);

            ProductAttribute::create([
                'product_id' => $product->id,
                'attribute_id' => $attributeWeight->id,
                'integer_value' => random_int(200, 2000), // Gram
            ]);

            // if ($manageStock) {
            //     ProductInventory::create([
            //         'product_id' => $product->id,
            //         'qty' => random_int(3, 20),
            //         'low_stock_threshold' => random_int(1, 3),

            //     ]);
            // }

            $this->command->info('10 sample product seeded.');
        }
    }
}
