<?php

namespace App\Command\Commands;

use App\Command\CalculatorCommandInterface;

class SubstructCommand extends AbstractCommand implements CalculatorCommandInterface
{
    public function execute()
    {
       $this->calculator->substruct($this->num);
    }
}
