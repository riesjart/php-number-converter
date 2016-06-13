<?php

namespace NumberConverter\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class NumberConverter extends Facade
{
 
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'NumberConverter';
    }

}