<?php

namespace App\AbstractFactory;

use App\Products\Parfum;
use App\Products\Soin;

class ProductFactory
{
    public function createParfum() {
        return new Parfum();
    }

    public function createSoin() {
        return new Soin();
    }

}
