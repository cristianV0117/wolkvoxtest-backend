<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;


final class ProductsUpdateController extends Controller
{
    public function __construct(
        private ProductsRepository $productsRepository
    ) {
    }
    
    public function __invoke(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0.01', 
        ]);

        return $this->productsRepository->update(id: $id, data: $data);
    }
}