<?php

namespace App\Factories;

use App\Factories\ProductFactoryInterface;
use App\Products\Soin;

class SoinFactory implements ProductFactoryInterface
{
    public function createProduct()
    {
        return new Soin();
    }
}
