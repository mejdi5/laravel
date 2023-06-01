<?php

namespace App\Adapter\Classes;

use App\Adapter\Interfaces\PizzaInterface;

class Pizza implements PizzaInterface
{
    public function getCheese()
    {
        return "this is cheese";
    }
}
