<?php

namespace Switchwatt\LaravelSdk\Facades;

use Illuminate\Support\Facades\Facade;
use Switchwatt\LaravelSdk\PlatformClient;

/**
 * @see \SwitchWatt\PlatformSdk\PlatformClient
 */
class Platform extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PlatformClient::class;
    }
}
