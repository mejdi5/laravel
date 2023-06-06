<?php

namespace App\Flyweight;


interface ProductInterface
{
    public function get(string $color, string $size);
}
