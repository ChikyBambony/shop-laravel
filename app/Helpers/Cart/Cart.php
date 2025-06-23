<?php

namespace App\Helpers\Cart;

use App\Models\Product;

class Cart
{
    public static function addProductToCart(int $productId,int $quantity = 1): bool
    {
        $added = false;
        if (self::hasProductInCart($productId)){
            session(["cart.{$productId}.quantity" => session("cart.{$productId}.quantity") + $quantity]);
            $added = true;
        } else {
            $product = Product::find($productId);
            if ($product){
                $new_product = [
                    'title' => $product->title,
                    'slug' => $product->slug,
                    'image' => $product->image,
                    'price' => $product->price,
                    'quantity' => $quantity,
                ];
                session(["cart.{$productId}" => $new_product]);
                $added = true;
            }
        }
        return $added;
    }

    public static function getCartQuantityItems(): int
    {
        return count(self::getCart());
    }

    public static function getCartQuantityTotal(): int
    {
        $cart = self::getCart();
        return array_sum(array_column($cart, 'quantity'));
    }
    public static function getCart(): array
    {
        return session('cart') ?: [];
    }
    public static function hasProductInCart(int $productId): bool
    {
        return session()->has("cart.$productId");
    }

}
