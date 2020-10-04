<?php

namespace Apsg\Baselinker;

use Apsg\Baselinker\Baselinker\Categories;
use Apsg\Baselinker\Baselinker\Orders;
use Apsg\Baselinker\Baselinker\Products;
use Apsg\Baselinker\Baselinker\Storages;

class Baselinker
{
    public function products() : Products
    {
        return app(Products::class);
    }

    public function storages() : Storages
    {
        return app(Storages::class);
    }

    public function categories() : Categories
    {
        return app(Categories::class);
    }

    public function orders() : Orders
    {
        return app(Orders::class);
    }
}
