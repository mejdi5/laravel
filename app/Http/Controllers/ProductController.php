<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractFactory\ProductFactory;

class ProductController extends Controller
{
    public function newParfum()
    {
        return (new ProductFactory())
        ->createParfum()
        ->message();
    }

    public function newSoin()
    {
        return (new ProductFactory())
        ->createSoin()
        ->message();
    }
}
