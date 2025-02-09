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
        return User::with(['myProductsOwner' => function($p){
            $p->with(['subcategory' => function($s){
                $s->with('category');
            }]);
        }])->find($id)->myProductsOwner;
    }

    public function myProductNonOwner($id)
    {
        return User::with(['myProductsNonOwner' => function($p){
            $p->with(['subcategory' => function($s){
                $s->with('category');
            }]);
        }])->find($id)->myProductsNonOwner;
    }

    public function elimina($id)
    {
        Product::find($id)->delete();
    }

    public function store($request)
    {
        $product = Product::create([
           'name' => $request->name,
           'description' => $request->description,
           'cost' => $request->cost,
           'subcategory_id' => $request->subcategory_id,
        ]);

        // associa i tags al prodotto
        $product->tags()->attach(array_map(fn($tag) => $tag->id, $request->tagList));

        // associa il prodotto all'user
        $product->users()->attach([auth()->id()], ['created_at' => now(), 'owner' => 1]);

        if ($request->photo) {
            $file = $request->photo;
            $filename = '1.' . $file->extension();
            $file->storeAs('product/'.$product->id.'/', $filename);
        }
    }
}
