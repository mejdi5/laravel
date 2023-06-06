<?php

namespace App\Http\Controllers;

use App\Proxy\Product;
use App\Proxy\ProductProxy;
use Illuminate\Http\Request;

class ProxyController extends Controller
{
    public function index()
    {
        $proxy = new ProductProxy('product_name', 54.9);
        $proxy->get();
        dump('---------');
        $proxy->get();
    }
}
