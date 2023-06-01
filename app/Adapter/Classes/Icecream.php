<?php

namespace App\Adapter\Classes;

use App\Adapter\Interfaces\IcecreamInterface;

class Icecream implements IcecreamInterface
{
    public function getChocolate()
    {
        return "This is chocolate";
    }
}
