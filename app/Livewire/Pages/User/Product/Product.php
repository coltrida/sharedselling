<?php

namespace App\Livewire\Pages\User\Product;

use App\Services\ProductService;
use Livewire\Component;

class Product extends Component
{
    public $product;

    public function mount(ProductService $productService, $product)
    {
        $this->product = $productService->findById($product) ;
    }

    public function render()
    {
        return view('livewire.pages.user.product.product');
    }
}
