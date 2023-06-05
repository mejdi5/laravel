<?php

namespace App\Decorator;

class Product
{
    public $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(int $cost)
    {
        $this->price += $cost;
    }
}
