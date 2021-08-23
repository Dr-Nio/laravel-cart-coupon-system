<?php

namespace App;

use Symfony\Component\Intl\Currencies;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presetPrice(){
        //return Currencies::getSymbol('USD');
        return number_format('$%i', $this->price / 100);
    }
}
