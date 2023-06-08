<?php

namespace App\Chain_Of_Responsibility;

use App\Chain_Of_Responsibility\Request;

interface HandlerInterface
{
    public function handle(Request $request);
    public function setNext(HandlerInterface $handler);
}
