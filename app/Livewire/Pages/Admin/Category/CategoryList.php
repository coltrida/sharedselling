<?php

namespace App\Livewire\Pages\Admin\Category;

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
        return view('livewire.pages.admin.category.category-list', [
            'list' => $categoryService->list()
        ]);
    }
}
