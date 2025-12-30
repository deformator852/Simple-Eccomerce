<?php

declare(strict_types=1);

namespace App\Repository;

use App\Contracts\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

final readonly class ProductRepository implements ProductRepositoryInterface
{
    public function all(): Collection
    {
        return Product::all();
    }
}
