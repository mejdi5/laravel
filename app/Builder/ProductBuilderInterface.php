<?php

namespace App\Builder;

use App\Models\Product;

interface ProductBuilderInterface
{
    public function addName(): void;

    public function addDescription(): void;

    public function getProduct(): Product;
}
