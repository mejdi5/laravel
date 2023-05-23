<?php

namespace App\Products;

use App\Products\ProductInterface;

class Parfum implements ProductInterface
{
    public function message() {
        return "nouveau parfum";
    }
}
