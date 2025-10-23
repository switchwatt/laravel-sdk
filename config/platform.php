<?php

return [
    /**
     * The API token for authenticating with the B2B Switching Platform.
     */
    'api_token' => env('SWITCHWATT_API_TOKEN'),

    /**
     * The base URL for the B2B Switching Platform's API.
     */
    'base_url' => env('SWITCHWATT_BASE_URL', 'http://localhost/api/'),
];
