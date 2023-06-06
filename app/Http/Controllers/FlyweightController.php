<?php

namespace App\Http\Controllers;

use App\Flyweight\ProductFactory;
use Illuminate\Http\Request;

class FlyweightController extends Controller
{
    public function index()
    {
        $flyweightFactory = new ProductFactory();
        $product = $flyweightFactory->getProduct('shirt', 'shirt description', 50);
        $product->get('blue', 'XL');
        dump('--------------');
        $product->get('red', 'M');
        dump('--------------');
        $anotherProduct = $flyweightFactory->getProduct('jeans', 'jeans description', 100);
        $anotherProduct->get('black', 45);
        dump('--------------');
    }
}
