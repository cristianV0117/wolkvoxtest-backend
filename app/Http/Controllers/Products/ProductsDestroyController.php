<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository;


final class ProductsDestroyController extends Controller
{
    public function __construct(
        private ProductsRepository $productsRepository
    ) {
    }
    
    public function __invoke(int $id)
    {
        return $this->productsRepository->destroy(id: $id);
    }
}