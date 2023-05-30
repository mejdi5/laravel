<?php

namespace App\Http\Controllers;

use App\Builder\ParfumBuilder;
use App\Builder\SoinBuilder;
use App\Director\Director;
use App\Models\Product;

class ProductController extends Controller
{
     public function makeProduct()
     {
        $director = new Director();
        $parfum = $director->build(new ParfumBuilder(new Product()));
        $soin = $director->build(new SoinBuilder(new Product()));
        echo $parfum->name . "<br>";
        echo $parfum->description . "<br>";
        print_r($parfum);
        echo "<br>" . "------------------" .  "<br>";
        echo $soin->name . "<br>";
        echo $soin->description . "<br>";
        print_r($soin);
     }
}
