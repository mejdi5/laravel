<?php

namespace App\Chain_Of_Responsibility\Handlers;
use App\Chain_Of_Responsibility\AbstractHandler;
use App\Chain_Of_Responsibility\Request;

class NumberHandler extends AbstractHandler
{
    public function handle(Request $request)
   {
        dump("the number handler tries to handle this request");
        if(gettype($request->field) == 'integer' || gettype($request->field) == 'double') {
            $request->setHandler("the number handler");
        } else {
            dump("the number handler cannot handle this request");
            parent::handle($request);
        }
   }
}
