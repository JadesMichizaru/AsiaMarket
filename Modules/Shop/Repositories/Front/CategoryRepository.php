<?php

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\app\Models\Category;
use Modules\Shop\Repositories\Front\Interface\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function findAll($options = [])
    {
        return Category::orderBy('name', 'asc')->get();
    }

    public function findBySlug($slug)
    {
        return Category::where('slug', $slug)->firstOrFail();
    }
}