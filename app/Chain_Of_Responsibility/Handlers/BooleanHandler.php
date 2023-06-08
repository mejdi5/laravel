<?php

namespace App\Chain_Of_Responsibility\Handlers;
use App\Chain_Of_Responsibility\AbstractHandler;
use App\Chain_Of_Responsibility\Request;

class BooleanHandler extends AbstractHandler
{
    public function handle(Request $request)
   {   dump("the boolean handler tries to handle this request");
        if($request->field === true || $request->field === false) {
            $request->setHandler("the boolean handler");
        } else {
            dump("the boolean handler cannot handle this request");
            parent::handle($request);
        }
   }
}
