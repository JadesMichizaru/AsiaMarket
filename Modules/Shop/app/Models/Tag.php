<?php

namespace Modules\Shop\app\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Database\factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, UuidTrait;


    protected $table = 'shop_tags';

    protected $fillable = [
        'slug',
        'name',
    ];
    protected static function newFactory()
    {
        return TagFactory::new();
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Shop\Entities\Product', 'shop_categories_products', 'product_id', 'category_id');
    }
}
