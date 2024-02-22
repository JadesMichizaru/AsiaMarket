<?php

namespace Modules\Shop\Repositories\Front;

use Modules\Shop\app\Models\Tag;
use Modules\Shop\Repositories\Front\Interface\TagRepositoryInterface;

class TagRepository implements TagRepositoryInterface
{
    public function findAll($options = [])
    {
        return Tag::orderBy('name', 'asc')->get();
    }

    public function findBySlug($slug)
    {
        return Tag::where('slug', $slug)->firstOrFail();
    }
}