<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class CustomerData
{
    public function __construct(
        public string  $firstName,
        public string  $lastName,
        public string  $email,
        public ?string $phone = null,
        public ?string $title = null,
    ) {}
}
