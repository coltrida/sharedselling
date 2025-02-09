<?php

namespace App\Livewire\Pages\User\Product;

use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $categoryList = [];
    public $name;
    public $cost;
    public $category;

    #[Validate('image|max:2048')]
    public $photo;


    public function categorySelected()
    {
        array_push($this->categoryList, json_decode($this->category));
    }

    public function save(ProductService $productService)
    {
        $request = new Request();
        $request->merge([
            'name' => $this->name,
            'cost' => $this->cost,
            'categoryList' => $this->categoryList,
            'photo' => $this->photo,
        ]);
        $productService->store($request);
        $this->reset();

        $this->dispatch('product-created');
    }

    public function render(CategoryService $categoryService)
    {
        return view('livewire.pages.user.product.upload', [
            'categories' => $categoryService->list()
        ]);
    }
}
