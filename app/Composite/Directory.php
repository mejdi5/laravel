<?php

namespace App\Composite;

class Directory implements ItemInterface
{
    private static $instance;
    public $name;
    public $items; //directories or files

    public function  __construct($name, $items = [])
    {
        $this->name = $name;
        $this->items = $items;
    }

    public static function getInstance($name)
    {
       if (!isset(self::$instance)) {
          self::$instance = new self($name);
       }
       return self::$instance;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getItems()
    {
        echo "Items: <br>";
        foreach ($this->items as $item) {
            echo  $item->getName() . "<br>";
        }
    }
    public function open()
    {
        echo "The " . $this->name . " directory has been opened <br>";
    }

    public function close()
    {
        foreach ($this->items as $item) {
            if ($item instanceof Directory) {
                echo "The " . $item->getName() . " directory has been closed <br>";
            } else if ($item instanceof File){
                echo "The " . $item->getName() . " file has been closed <br>";
            } else {
                return;
            }
        }
        echo "The " . $this->name . " directory has been closed <br>";
    }

    public function addItem(ItemInterface $item)
    {
       $this->items[] = $item;
       echo $item->getName() . " has been added <br>";
    }

    public function removeItem(ItemInterface $itemToRemove)
    {
        $this->items = array_filter($this->items, function ($item) use ($itemToRemove) {
            if($item != $itemToRemove)
            {
                return $item;
            }
            return null;
        });
        echo $itemToRemove->getName() . " has been deleted <br>";
    }
}
