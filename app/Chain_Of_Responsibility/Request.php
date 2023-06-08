<?php

namespace App\Chain_Of_Responsibility;

class Request
{
    public $handler;
    public $field;

    public function __construct($field)
    {
       $this->field = $field;
    }
    public function setHandler($handler)
    {
        $this->handler = $handler;

        dump("request is handled by " . $handler);
    }
}
