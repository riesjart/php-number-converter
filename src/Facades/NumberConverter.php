<?php

namespace LaravelNumberConverter\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class LaravelNumberConverter extends Facade
{
 
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'LaravelNumberConverter';
    }

}