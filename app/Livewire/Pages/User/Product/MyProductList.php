<?php

namespace App\Livewire\Pages\User\Product;

use App\Services\ProductService;
use Livewire\Attributes\On;
use Livewire\Component;

class MyProductList extends Component
{
    #[On('product-created')]
    public function render(ProductService $productService)
    {
        return view('livewire.pages.user.product.my-product-list', [
            'listOwner' => $productService->myProductOwner(auth()->id()),
            'listNonOwner' => $productService->myProductNonOwner(auth()->id()),
        ]);
    }
}
