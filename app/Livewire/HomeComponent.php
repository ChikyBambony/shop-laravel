<?php

namespace App\Livewire;

use App\Helpers\Traits\CartTrait;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{

    Use CartTrait;
    public function render()
    {
        $hits_products = Product::query()
            ->orderBy('id', 'desc')
            ->where('is_hit', '=',1)
            ->limit(6)
            ->get();
        $new_products = Product::query()
            ->orderBy('id', 'desc')
            ->where('is_new', '=',1)
            ->limit(6)
            ->get();
        return view('livewire.home-component', [
            'hits_products' => $hits_products,
            'new_products' => $new_products,

        ]);
    }
}
