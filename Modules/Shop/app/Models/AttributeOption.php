<?php

namespace Modules\Shop\app\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\AttributeOptionFactory;


class AttributeOption extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_attribute_options';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'attribute_id',
        'slug',
        'name'
    ];

    protected static function newFactory()
    {
        return AttributeOptionFactory::new();
    }
}
