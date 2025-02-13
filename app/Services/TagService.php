<?php

namespace App\Services;

use App\Models\Subcategory;
use App\Models\Tag;

class TagService
{
    public function list()
    {
        return Tag::with(['subcategories' => function($s){
            $s->with('category');
        }])->get();
    }

    public function listPaginate()
    {
        return Tag::with('subcategories')->paginate(5);
    }

    public function loadTags($subcategoryId)
    {
        return Subcategory::with('tags')->find($subcategoryId)->tags;
    }
}
