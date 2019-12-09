<?php

namespace Eguana\IEBrasil\Facades;

use Illuminate\Support\Facades\Facade;

class IEBrasil extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'iebrasil';
    }
}
