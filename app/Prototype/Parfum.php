<?php

namespace App\Prototype;

class Parfum extends Product
{
    public function __clone()
    {
        $this->setName("Parfum");
    }
}
