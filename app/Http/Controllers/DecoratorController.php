<?php

namespace App\Http\Controllers;

use App\Decorator\Decorators\FeeDecorator;
use App\Decorator\Decorators\TaxDecorator;
use App\Decorator\Payment;
use App\Decorator\Product;

class DecoratorController extends Controller
{
    public function index()
    {
         $product = new Product(50);
         $payment = new Payment();
         $payment = new TaxDecorator($payment);
         $payment = new FeeDecorator($payment);

        $payment->pay($product);

        dump($product->getPrice());
    }
}
