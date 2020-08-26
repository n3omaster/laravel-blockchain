<?php

namespace N3omaster\Blockchain\Facades;

use Illuminate\Support\Facades\Facade;

class Blockchain extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-blockchain';
    }
}
