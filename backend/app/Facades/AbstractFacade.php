<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class abstractFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return null;
    }
}