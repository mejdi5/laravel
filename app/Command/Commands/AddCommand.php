<?php

namespace App\Command\Commands;

use App\Command\CalculatorCommandInterface;

class AddCommand extends AbstractCommand implements CalculatorCommandInterface
{
    public function execute()
    {
       $this->calculator->add($this->num);
    }
}
