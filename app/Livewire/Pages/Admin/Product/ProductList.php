<?php

namespace App\Livewire\Pages\Admin\Product;

use App\Services\ProductService;
use Livewire\Component;

class ProductList extends Component
{

    public function elimina(ProductService $productService, $id)
    {
        $productService->elimina($id);
    }

    public function render(ProductService $productService)
    {
        return view('livewire.pages.admin.product.product-list', [
            'list' => $productService->list()
        ]);
    }
}
