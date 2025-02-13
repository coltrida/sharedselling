<?php

namespace App\Livewire\Pages\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class ProductInfo extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.pages.admin.product.product-info');
    }
}
