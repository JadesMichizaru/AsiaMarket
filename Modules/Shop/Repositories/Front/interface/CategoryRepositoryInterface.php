<?php

namespace Modules\Shop\Repositories\Front\Interface;

interface CategoryRepositoryInterface
{
    public function findAll($options = []);
    public function findBySlug($slug);

}