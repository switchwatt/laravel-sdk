<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class PaymentData
{
    public function __construct(
        public string $method,
        public ?string $accountNumber = null,
        public ?string $sortCode = null,
        public ?string $accountHolderName = null,
    ) {}
}
