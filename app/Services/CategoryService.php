<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function list()
    {
        return Category::with(['subcategories' => function($c){
            $c->with('tags');
        }])->get();
    }

    public function elimina($id)
    {
        Category::find($id)->delete();
    }

    public function loadSubcategory($idCategory)
    {
        return Category::with('subcategories')->find($idCategory)->subcategories;
    }
}
