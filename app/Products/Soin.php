<?php

namespace App\Products;

use App\Products\ProductInterface;

class Soin implements ProductInterface
{
    public function message() {
        return "nouveau produit de soin";
    }
}
