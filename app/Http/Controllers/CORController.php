<?php

namespace App\Http\Controllers;

use App\Chain_Of_Responsibility\Handlers\BooleanHandler;
use App\Chain_Of_Responsibility\Handlers\NumberHandler;
use App\Chain_Of_Responsibility\Handlers\StringHandler;
use \App\Chain_Of_Responsibility\Request;

class CORController extends Controller
{
    public function index()
    {
        $request = new Request([1,2,3]);

        $boolean_handler = new BooleanHandler;
        $number_handler = new NumberHandler;
        $string_handler = new StringHandler;

        $boolean_handler->setNext($number_handler);
        $number_handler->setNext($string_handler);

        var_dump($request->field);
        $boolean_handler->handle($request);
    }
}
