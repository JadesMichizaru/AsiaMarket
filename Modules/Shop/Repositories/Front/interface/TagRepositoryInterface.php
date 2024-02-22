<?php

namespace Modules\Shop\Repositories\Front\Interface;

interface TagRepositoryInterface
{
    public function findAll($options = []);
    public function findBySlug($slug);

}