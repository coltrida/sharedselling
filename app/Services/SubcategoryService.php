<?php

namespace App\Services;

use App\Models\Subcategory;

class SubcategoryService
{
    public function list()
    {
        return Subcategory::with('category', 'tags')->get();
    }
}
