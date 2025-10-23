<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class ElectricitySupplyData
{
    public function __construct(
        public string  $mpanCore,
        public string  $tariffName,
        public float   $standingCharge,
        public float   $unitRate,
        public bool    $isEconomy7 = false,
        public ?float  $nightRate = null,
        public ?string $profileClass = null,
        public ?string $meterType = null,
        public ?string $currentSupplierName = null,
        public ?string $currentTariffName = null,
    )
    {
    }
}
