<?php

namespace App\Implementations;

use App\Models\Product;
use App\Repositories\ProductsRepository;

final class ProductsMysqlImplementation implements ProductsRepository
{
    public function index()
    {
        return Product::all();
    }

    public function show(int $id)
    {
        return Product::findOrFail($id);
    }

    public function store(array $data)
    {
        return Product::create($data);
    }

    public function update($id, array $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->noContent();
    }
}