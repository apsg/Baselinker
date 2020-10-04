<?php

namespace Apsg\Baselinker\Facades;

use Illuminate\Support\Facades\Facade;

class Baselinker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'baselinker';
    }
}
