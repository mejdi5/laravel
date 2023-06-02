<?php

namespace App\Composite;

class File implements ItemInterface
{
    public $name;
    private $directory_name;

    public function __construct($name, $directory_name)
    {
        $this->name = $name;
        $this->directory_name = $directory_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function open()
    {
        $directory = Directory::getInstance($this->directory_name); //singleton design pattern
        $directory->open();
        echo "The " . $this->name . " file has been opened <br>";
    }

    public function close()
    {
        echo "The " . self::$name . " file has been closed <br>";
    }
}
