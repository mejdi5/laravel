<?php

namespace App\Bridge;

abstract class Animal
{
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract function get();
}
