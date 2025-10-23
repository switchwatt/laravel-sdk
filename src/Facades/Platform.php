<?php

namespace Switchwatt\LaravelSdk\Facades;

use Illuminate\Support\Facades\Facade;
use SwitchWatt\PlatformSdk\PlatformClient;

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
