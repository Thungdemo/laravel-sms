<?php

namespace Thungdemo\LaravelSms\Facades;

use Illuminate\Support\Facades\Facade;
use Thungdemo\Sms\Drivers\DriverInterface;

/**
 * Facade for the SMS provider
 */
class Sms extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DriverInterface::class;
    }
}
