<?php

namespace App;

trait ConvertPriceToUsdTrait
{
    //
    public function convertprice($price){
        return $price/50;
    }
}
