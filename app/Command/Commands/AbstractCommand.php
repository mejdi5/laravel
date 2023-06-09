<?php

namespace App\Command\Commands;

use App\Command\CalculatorReceiver;

abstract class AbstractCommand
{
    public $calculator;
    public $num;

    public function __construct(CalculatorReceiver $calculator, $num)
    {
        $this->calculator = $calculator;
        $this->num = $num;
    }

    public function undo()
    {
        $this->calculator->undo();
    }
}
