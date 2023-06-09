<?php

namespace App\Command;

use Brick\Math\Exception\DivisionByZeroException;

class CalculatorReceiver
{
    public $values = [0];
    public $history = [];

    public function add($num) {
        $this->values[] = end($this->values) + $num;
        $this->history[] = 'addition';
    }
    public function substruct($num)
    {
        $this->values[] = end($this->values) - $num;
        $this->history[] = 'substruction';
    }
    public function multiply($num)
    {
        $this->values[] = end($this->values) * $num;
        $this->history[] = 'multiplication';
    }
    public function divide($num)
    {
        if ($num !== 0) {
            $this->values[] = end($this->values) / $num;
            $this->history[] = 'division';
        } else {
            throw new DivisionByZeroException;
        }
    }
    public function undo()
    {
        if(!empty($this->history)) {
            array_pop($this->history);
        }
        if($this->values != [0]) {
            array_pop($this->values);
        }
    }
}
