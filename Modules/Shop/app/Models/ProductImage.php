<?php

namespace Modules\Shop\app\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductImageFactory;

class ProductImage extends Model
{
    use HasFactory, UuidTrait;


    protected $table = 'shop_product_images';

    protected $fillable = [
        'slug',
        'name',
    ];

    protected static function newFactory()
    {
        return ProductImageFactory::new();
    }
}
