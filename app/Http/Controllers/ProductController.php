<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\ParfumFactory;
use App\Factories\SoinFactory;

class ProductController extends Controller
{
    public function createParfum()
    {
        return (new ParfumFactory())
        ->createProduct()
        ->message();
    }

    public function createSoin()
    {
        return (new SoinFactory())
        ->createProduct()
        ->message();
    }
}
