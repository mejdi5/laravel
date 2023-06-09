<?php

namespace App\Command\Commands;

use App\Command\CalculatorCommandInterface;

class DivideCommand extends AbstractCommand implements CalculatorCommandInterface
{
    public function execute()
    {
       $this->calculator->divide($this->num);
    }
}
