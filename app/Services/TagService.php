<?php

namespace App\Services;

use App\Models\Subcategory;
use App\Models\Tag;

class TagService
{
    public function list()
    {
        return Tag::all();
    }

    public function loadTags($subcategoryId)
    {
        return Subcategory::with('tags')->find($subcategoryId)->tags;
    }
}
