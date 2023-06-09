<?php

namespace App\Command;

interface CalculatorCommandInterface
{
    public function execute();
    public function undo();
}
