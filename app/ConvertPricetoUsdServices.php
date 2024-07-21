<?php

namespace App;

class ConvertPricetoUsdServices
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function convertprice($price){
        return $price/50;
    }
}
