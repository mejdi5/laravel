<?php

namespace App\Decorator\Decorators;

use App\Decorator\Product;

class FeeDecorator extends CostDecorator
{
    private $fee = 5;

    public function pay(Product $product)
    {
        $product->setPrice($this->fee);
        return parent::pay($product);
    }
}
