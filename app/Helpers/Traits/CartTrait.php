<?php

namespace App\Helpers\Traits;

use App\Helpers\Cart\Cart;
use Illuminate\Support\Facades\Log;

trait CartTrait
{

    public int $quantity = 1;

    public function add2Cart(int $productId, $quantity = false)
    {
        $quantity = $quantity ? $this->quantity : 1;
        if ($quantity < 1) {
            $quantity = 1;
        }
        if (Cart::addProductToCart($productId, $quantity)) {
            $this->js("toastr.success('Product added to cart')");
            $this->dispatch('cart-updated');
        }   else {
            $this->js("toastr.error('Product don't added to cart')");
        }
    }
}


