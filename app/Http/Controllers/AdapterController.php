<?php

namespace App\Http\Controllers;

use App\Adapter\Adapter;
use App\Adapter\Classes\Icecream;
use App\Adapter\Classes\Pizza;
use App\Adapter\Classes\Product;

class AdapterController extends Controller
{
    public function index()
    {
        $ice_cream = new Icecream();
        dump((new Product($ice_cream))->get());

        dump('---------------');

        $pizza = new Pizza();
        $adapter = new Adapter($pizza);
        dump((new Product($adapter))->get());
    }
}
