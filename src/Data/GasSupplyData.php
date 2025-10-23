<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class GasSupplyData
{
    public function __construct(
        public string $mprn,
        public string $tariffName,
        public float  $standingCharge,
        public float  $unitRate,
        public ?string $meterType = null,
        public ?string $currentSupplierName = null,
        public ?string $currentTariffName = null,
    ) {}
}
