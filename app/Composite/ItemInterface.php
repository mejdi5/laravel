<?php

namespace App\Composite;

interface ItemInterface {
    public function getName();
    public function open();
    public function close();
}

//item can be a file or a directory
