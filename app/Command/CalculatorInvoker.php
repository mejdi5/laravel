<?php

namespace App\Command;

use Exception;

class CalculatorInvoker
{
    private $command;
    public function setCommand(CalculatorCommandInterface $command)
    {
        $this->command = $command;
    }

    public function run($method)
    {
        if($method != "execute" && $method != "undo") {
            throw new Exception("Unknown method: $method");
        }
        $this->command->$method();
    }
}
