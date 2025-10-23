<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class PropertyData
{
    public function __construct(
        public string $supplyAddress1,
        public string $supplyPostcode,
    ) {}
}
