<?php

namespace App\Proxy;

class ProductProxy implements ProductInterface
{
    private $product;
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function get()
    {
        echo "getting product request<br>"; //pre-request
        if ($this->product === null) {
            $this->product = new Product($this->name, $this->price);
        }
        $this->product->get();
        echo "<br>product getting completed"; //post-request
    }
}
