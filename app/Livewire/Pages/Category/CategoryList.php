<?php

namespace App\Livewire\Pages\Category;

use App\Services\CategoryService;
use Livewire\Component;

class CategoryList extends Component
{

    public function elimina(CategoryService $categoryService, $id)
    {
        $categoryService->elimina($id);
    }


    public function render(CategoryService $categoryService)
    {
        return view('livewire.pages.category.category-list', [
            'list' => $categoryService->list()
        ]);
    }
}
