<?php

namespace App\Http\Controllers;

use App\Prototype\Parfum;
use App\Prototype\Soin;
use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    public function index()
    {
        $parfum = new Parfum();
        $soin = new Soin();
        for ($i = 1; $i < 5; $i++) {
           $newPafum = clone $parfum;
           $newSoin = clone $soin;
           dump('Instance: ' . $i);
           dump($newPafum);
           dump($newSoin);
           dump('--------------------------------');
        }
    }
}
