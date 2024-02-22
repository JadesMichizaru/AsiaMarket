<?php

namespace Modules\Shop\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\Repositories\Front\Interface\AddressRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Shop\Repositories\Front\Interface\CartRepositoryInterface;

class OrderController extends Controller
{

    protected $addressRepository;
    protected $cartRepository;

    public function __construct(AddressRepositoryInterface $addressRepository, CartRepositoryInterface $cartRepository)
    {
        $this->addressRepository = $addressRepository;
        $this->cartRepository = $cartRepository;
    }

    public function checkout()
    {
        $this->data['cart'] = $this->cartRepository->findByUser(auth()->user());
        $this->data['addresses'] = $this->addressRepository->findByUser(auth()->user());

        return $this->loadTheme('orders.checkout', $this->data);
    }

    public function shippingFee()
    {
        return $this->loadTheme('orders.shipping_fee');
    }
}