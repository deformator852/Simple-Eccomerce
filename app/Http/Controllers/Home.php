<?php

namespace App\Http\Controllers;

use App\Contracts\ProductRepositoryInterface;
use Inertia\Inertia;
use Inertia\Response;

class Home extends Controller
{
    public function __invoke(ProductRepositoryInterface $productRepository): Response
    {
        $products = $productRepository->all();
        return Inertia::render('Home', compact('products'));
    }
}
