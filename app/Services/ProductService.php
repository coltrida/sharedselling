<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;

class ProductService
{
    public function list()
    {
        return Product::all();
    }

    public function myProductOwner($id)
    {
        return User::with('myProductsOwner')->find($id)->myProductsOwner;
    }

    public function myProductNonOwner($id)
    {
        return User::with('myProductsNonOwner')->find($id)->myProductsNonOwner;
    }

    public function elimina($id)
    {
        Product::find($id)->delete();
    }

    public function store($request)
    {
        $product = Product::create([
           'name' => $request->name,
           'cost' => $request->cost,
        ]);

        // associa le categorie al prodotto
        $product->categories()->attach(array_map(fn($category) => $category->id, $request->categoryList));

        // associa il prodotto all'user
        $product->users()->attach([auth()->id()], ['created_at' => now(), 'owner' => 1]);
    }
}
