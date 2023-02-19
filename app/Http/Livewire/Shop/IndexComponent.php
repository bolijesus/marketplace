<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        $products = Product::take(12)->get();
        return view('livewire.shop.index-component', \compact('products'))
        ->extends('layouts.app')
        ->section('content');
    }
}
