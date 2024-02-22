<?php

namespace Modules\Shop\Repositories\Front\Interface;

use App\Models\User;
use Modules\Shop\app\Models\Cart;
use Modules\Shop\app\Models\Product;
use Modules\Shop\app\Models\CartItem;

interface AddressRepositoryInterface
{
    public function findByUser(User $user);
}