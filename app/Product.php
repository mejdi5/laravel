<?php

namespace App;

class Product
{
    private static $instance;
    private static $name;

    private function __construct($name)
    {
        self::$name = $name;
    }

    public static function getInstance($name)
    {
       if (!isset(self::$instance)) {
          self::$instance = new self($name);
       }
       return self::$instance;
    }

    public static function getName()
    {
        dd(self::$name);
    }

}
