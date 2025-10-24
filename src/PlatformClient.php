<?php

namespace Switchwatt\LaravelSdk;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Switchwatt\LaravelSdk\Data\SwitchData;

class PlatformClient
{
    protected PendingRequest $http;

    /**
     * Create a new client instance.
     */
    public function __construct(string $apiToken, string $baseUrl)
    {
        // Pre-configure the HTTP client with the base URL and authentication headers.
        $this->http = Http::withToken($apiToken)
            ->baseUrl($baseUrl)
            ->acceptJson()
            ->throw(); // Automatically throw exceptions on 4xx/5xx errors
    }

    /**
     * Fetch the list of available suppliers.
     * @throws ConnectionException
     */
    public function getSuppliers(): array
    {
        return $this->http->get('partner/suppliers')->json('data', []);
    }

    /**
     * Get the current status of a specific switch.
     * @throws ConnectionException
     */
    public function getSwitchStatus(string $uuid): array
    {
        return $this->http->get("partner/switches/{$uuid}")->json();
    }

    /**
     * Submit a new switch to the platform.
     * @throws ConnectionException
     */
    public function submitSwitch(SwitchData $data): array
    {
        return $this->http->post('partner/switches', $data->toArray())->json();
    }
}
