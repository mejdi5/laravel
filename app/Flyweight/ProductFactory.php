<?php

namespace App\Flyweight;

class ProductFactory
{
    private $products = [];

    public function getProduct(string $name, string $description, float $price): ProductInterface
    {
        $key = $name . '-' . $price;

        if (!isset($this->products[$key])) {
            $this->products[$key] = new Product($name, $description, $price);
        }

        return $this->products[$key];
    }
}
