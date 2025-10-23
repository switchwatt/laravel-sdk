<?php

namespace Switchwatt\LaravelSdk\Data;

readonly class SwitchData
{
    public function __construct(
        public string                 $supplierId,
        public string                 $tariffType,
        public CustomerData           $customer,
        public PropertyData           $property,
        public PaymentData            $payment,
        public ?ElectricitySupplyData $electricitySupply = null,
        public ?GasSupplyData         $gasSupply = null,
    ) {}

    public function toArray(): array
    {
        return [
            'supplier_id' => $this->supplierId,
            'tariff_type' => $this->tariffType,
            'is_dual_fuel' => !is_null($this->electricitySupply) && !is_null($this->gasSupply),
            'customer' => (array) $this->customer,
            'property' => (array) $this->property,
            'payment' => (array) $this->payment,
            'electricity_supply' => $this->electricitySupply ? (array) $this->electricitySupply : null,
            'gas_supply' => $this->gasSupply ? (array) $this->gasSupply : null,
        ];
    }
}
