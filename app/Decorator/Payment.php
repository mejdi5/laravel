<?php

namespace App\Decorator;

class Payment implements ProductDecoratorInterface
{
    public function pay(Product $product)
    {
        return $product;
    }
}
