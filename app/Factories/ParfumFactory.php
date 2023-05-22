<?php

namespace App\Factories;

use App\Factories\ProductFactoryInterface;
use App\Products\Parfum;

class ParfumFactory implements ProductFactoryInterface
{
    public function createProduct()
    {
        return new Parfum();
    }
}
