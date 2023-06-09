<?php

namespace App\Command\Commands;

use App\Command\CalculatorCommandInterface;

class MultiplyCommand extends AbstractCommand implements CalculatorCommandInterface
{
    public function execute()
    {
       $this->calculator->multiply($this->num);
    }
}
