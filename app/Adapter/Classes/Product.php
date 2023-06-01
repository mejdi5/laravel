<?php


namespace App\Adapter\Classes;

use App\Adapter\Interfaces\IcecreamInterface;

class Product
{
    private $ice_cream;

    public function __construct(IcecreamInterface $ice_cream)
    {
        $this->ice_cream = $ice_cream;
    }

    public function get()
    {
       return $this->ice_cream->getChocolate();
    }
}
