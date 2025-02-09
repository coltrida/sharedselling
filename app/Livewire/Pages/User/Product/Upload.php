<?php

namespace App\Livewire\Pages\User\Product;

use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\TagService;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $tagList = [];
    public $name;
    public $description;
    public $cost;
    public $tag;
    public $category;
    public $subcategory;
    public $subcategories = [];
    public $tags = [];
    public $showSubcategory = false;
    public $showTags = false;

    #[Validate('image|max:2048')]
    public $photo;


    public function tagSelected()
    {
        array_push($this->tagList, json_decode($this->tag));
    }

    public function categorySelected(CategoryService $categoryService)
    {
        $this->subcategories = $categoryService->loadSubcategory($this->category);
        $this->showSubcategory = true;
    }

    public function subcategorySelected(TagService $tagService)
    {
        $this->tags = $tagService->loadTags($this->subcategory);
        $this->showTags = true;
    }

    public function eliminaFoto()
    {
        $this->reset('photo');
    }

    public function save(ProductService $productService)
    {
        $request = new Request();
        $request->merge([
            'name' => $this->name,
            'cost' => $this->cost,
            'description' => $this->description,
            'subcategory_id' => $this->subcategory,
            'tagList' => $this->tagList,
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
