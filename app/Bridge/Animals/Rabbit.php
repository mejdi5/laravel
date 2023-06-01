<?php

namespace App\Bridge\Animals;

use App\Bridge\Color;
use App\Bridge\Animal;

class Rabbit extends Animal
{
    protected $color;

    public function __construct(Color $color)
    {
        parent::__construct($color);
    }

    function get()
    {
        return "A " . $this->color->getColor() . " rabbit";
    }
}
