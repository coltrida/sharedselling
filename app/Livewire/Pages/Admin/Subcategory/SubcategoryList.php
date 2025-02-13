<?php

namespace App\Livewire\Pages\Admin\Subcategory;

use App\Services\SubcategoryService;
use Livewire\Component;

class SubcategoryList extends Component
{
    public function render(SubcategoryService $subcategoryService)
    {
        return view('livewire.pages.admin.subcategory.subcategory-list', [
            'list' => $subcategoryService->list()
        ]);
    }
}
