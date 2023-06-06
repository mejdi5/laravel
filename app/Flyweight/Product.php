<?php

namespace App\Flyweight;


class Product implements ProductInterface
{
    private $name;
    private $description;
    private $price;

    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function get(string $color, string $size)
    {
        echo '<strong>Name:</strong> ' . $this->name . '<br>';
        echo '<strong>Description:</strong> ' . $this->description . '<br>';
        echo '<strong>Price:</strong> ' . $this->price . '<br>';
        echo '<strong>Color:</strong> ' . $color . '<br>';
        echo '<strong>Size:</strong> ' . $size . '<br>';
    }
}
