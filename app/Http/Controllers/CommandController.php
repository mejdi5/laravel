<?php

namespace App\Http\Controllers;

use App\Command\CalculatorInvoker;
use App\Command\CalculatorReceiver;
use App\Command\Commands\AddCommand;
use App\Command\Commands\DivideCommand;
use App\Command\Commands\MultiplyCommand;
use App\Command\Commands\SubstructCommand;

class CommandController extends Controller
{
    public function index()
    {
        $receiver = new CalculatorReceiver();
        $invoker = new CalculatorInvoker();

        dump('Initial Receiver');
        dump($receiver);
        dump('---------');

        $command = new AddCommand($receiver, 8);
        $invoker->setCommand($command);
        $invoker->run("execute");
        dump('Add 8');
        dump($receiver);
        dump('---------');

        $command = new SubstructCommand($receiver, 5);
        $invoker->setCommand($command);
        $invoker->run("execute");
        dump('Substruct 5');
        dump($receiver);
        dump('---------');

        $command = new MultiplyCommand($receiver, 2);
        $invoker->setCommand($command);
        $invoker->run("execute");
        dump('Multiply by 2');
        dump($receiver);
        dump('---------');

        $command = new DivideCommand($receiver, 3);
        $invoker->setCommand($command);
        $invoker->run("execute");
        dump('Divide by 3');
        dump($receiver);
        dump('-------------------------------------------------------------------------------------------------------------------------------------------------------------');
        dump("Undo the previous operations");
        $invoker->run("undo");
        dump($receiver);
        $invoker->run("undo");
        dump($receiver);
        $invoker->run("undo");
        dump($receiver);
        $invoker->run("undo");
        dump($receiver);
        $invoker->run("undo");
        dump($receiver);
    }
}
