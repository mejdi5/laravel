<?php

namespace App\Chain_Of_Responsibility;

use App\Chain_Of_Responsibility\HandlerInterface;
use App\Chain_Of_Responsibility\Request;

abstract class AbstractHandler implements HandlerInterface
{
   public $next;

   public function handle(Request $request)
   {
        if(isset($this->next)) {
            $this->next->handle($request);
        } else {
            dump("This request is not handled");
        }
   }

   public function setNext($handler)
   {
     $this->next = $handler;
   }
}
