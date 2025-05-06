<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository;


final class ProductsIndexController extends Controller
{
    public function __construct(
        private ProductsRepository $productsRepository
    ) {
    }
    
    public function __invoke()
    {
        return $this->productsRepository->index();
    }
}