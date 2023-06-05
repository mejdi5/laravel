<?php

namespace App\Decorator\Decorators;

use App\Decorator\Product;
use App\Decorator\ProductDecoratorInterface;

class CostDecorator implements ProductDecoratorInterface
{
    protected $cost;

    public function __construct(ProductDecoratorInterface $cost)
    {
        $this->cost = $cost;
    }
    public function pay(Product $product)
    {
       return $this->cost->pay($product);
    }
}
