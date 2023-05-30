<?php

namespace App\Director;

use App\Builder\ProductBuilderInterface;

class Director
{
    public function build(ProductBuilderInterface $builder)
    {
        $builder->addName();
        $builder->addDescription();

        return $builder->getProduct();
    }
}
