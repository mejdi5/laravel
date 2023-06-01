<?php


namespace App\Adapter;

use App\Adapter\Interfaces\IcecreamInterface;
use App\Adapter\Interfaces\PizzaInterface;


class Adapter implements IcecreamInterface
{
    private $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getChocolate()
    {
       return $this->pizza->getCheese();
    }
}
