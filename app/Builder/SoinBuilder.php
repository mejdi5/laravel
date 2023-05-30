<?php

namespace App\Builder;

use App\Models\Product;

class SoinBuilder implements ProductBuilderInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function addName(): void
    {
        $this->product->name = "nom du soin";
    }

    public function addDescription(): void
    {
        $this->product->description = "description du soin";
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
