<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function list()
    {
        return Product::all();
    }

    public function elimina($id)
    {
        Product::find($id)->delete();
    }
}
