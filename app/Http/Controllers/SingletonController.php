<?php

namespace App\Http\Controllers;

use App\Product;

class SingletonController extends Controller
{
    public function index()
    {
        Product::getInstance("product name");
        Product::getName();
    }
}
