<?php


namespace App\Facades;


use App\Contracts\PlatformInterface;
use Illuminate\Support\Facades\Facade;

class PlatformGateway extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return PlatformInterface::class;
    }
}
