<?php

namespace Modules\Shop\app\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductInventoryFactory;

class ProductInventory extends Model
{
    use HasFactory, UuidTrait;


    protected $table = 'shop_tags';

    protected $fillable = [
        'slug',
        'name',
    ];
    protected static function newFactory()
    {
        return ProductInventoryFactory::new();

    }
}
