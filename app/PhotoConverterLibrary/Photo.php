<?php


namespace App\PhotoConverterLibrary;


class Photo
{
    public $name;
    private $type;
    private $state;

    public function __construct($name, $type = null, $state = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->state = $state;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
}
