<?php

namespace App\Proxy;

class Product implements ProductInterface
{
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->loadProduct();
    }

    public function get()
    {
        echo "the Product {$this->name} costs {$this->price} dollars.";
    }

    private function loadProduct()
    {
        echo "loading product $this->name <br>";
    }
}

