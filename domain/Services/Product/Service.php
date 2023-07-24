<?php

namespace Domain\Services\Product;

use App\Models\Products\Product;

class Service
{
    public function store($request)
    {
        $parameters = [
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image') ? $request->file('image')->store('images') : NULL,
            'price' => $request->price
        ];

        $product = Product::create($parameters);

        return $product;
    }

    public function update($request, $product)
    {
        $parameters = [
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image') ? $request->file('image')->store('images') : NULL,
            'price' => $request->price
        ];

        return $product->update($parameters);
    }

    public function delete($product)
    {
        $product->delete();
    }
}
