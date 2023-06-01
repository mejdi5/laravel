<?php

namespace App\Http\Controllers;

use App\Bridge\Animals\Cat;
use App\Bridge\Animals\Dog;
use App\Bridge\Animals\Rabbit;
use App\Bridge\Colors\Black;
use App\Bridge\Colors\Grey;
use App\Bridge\Colors\White;
use Illuminate\Http\Request;

class BridgeController extends Controller
{
    public function index(Request $request)
    {
        $requested_type = $request->get('animal');
        $requested_color = $request->get('color');
        $color = null;
        $animal = null;

        //we can use factory pattern to refactor these switch/case blocks
        switch ($requested_color) {
            case 'white':
                $color = new White();
                break;
            case 'black':
                $color = new Black();
                break;
            case 'grey':
                $color = new Grey();
                break;
        }

        switch ($requested_type) {
            case 'cat':
                $animal = new Cat($color);
                break;
            case 'dog':
                $animal = new Dog($color);
                break;
            case 'rabbit':
                $animal = new Rabbit($color);
                break;
        }

        if(!isset($requested_type) || !isset($requested_color)) {
            dump("You must pass animal type and color");
        } else {
            dump($animal->get());
        }
    }
}
