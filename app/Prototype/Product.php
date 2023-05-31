<?php

namespace App\Prototype;

abstract class Product {
    protected $name = "product name";
    protected $description = "product description";

    abstract function __clone();
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
