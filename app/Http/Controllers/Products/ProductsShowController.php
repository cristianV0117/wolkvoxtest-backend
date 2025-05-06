<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository;


final class ProductsShowController extends Controller
{
    public function __construct(
        private ProductsRepository $productsRepository
    ) {
    }
    
    public function __invoke(int $id)
    {
        return $this->productsRepository->show(id: $id);
    }
}