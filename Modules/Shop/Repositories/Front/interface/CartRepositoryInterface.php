<?php

namespace Modules\Shop\Repositories\Front\Interface;

use App\Models\User;
use Modules\Shop\app\Models\Cart;
use Modules\Shop\app\Models\Product;
use Modules\Shop\app\Models\CartItem;

interface CartRepositoryInterface
{
    public function findByUser(User $user): Cart;
    public function addItem(Product $product, $qty): CartItem;
    public function removeItem($id);

    public function updateQty($items);
}