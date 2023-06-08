<?php

namespace App\Chain_Of_Responsibility\Handlers;
use App\Chain_Of_Responsibility\AbstractHandler;
use App\Chain_Of_Responsibility\Request;

class StringHandler extends AbstractHandler
{
    public function handle(Request $request)
   {
        dump("the string handler tries to handle this request");
        if(gettype($request->field) == 'string') {
            $request->setHandler("the string handler");
        } else {
            dump("the string handler cannot handle this request");
            parent::handle($request);
        }
   }
}
