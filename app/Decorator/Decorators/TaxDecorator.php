<?php

namespace App\Decorator\Decorators;

use App\Decorator\Product;

class TaxDecorator extends CostDecorator
{
    private const TAX = 10;

    public function pay(Product $product)
    {
        $product->setPrice(self::TAX);
        return parent::pay($product);
    }
}
