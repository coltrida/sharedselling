<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function list()
    {
        return Category::all();
    }

    public function elimina($id)
    {
        Category::find($id)->delete();
    }
}
