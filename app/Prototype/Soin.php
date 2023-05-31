<?php

namespace App\Prototype;

class Soin extends Product
{
    public function __clone()
    {
        $this->setDescription("description du soin");
    }
}
