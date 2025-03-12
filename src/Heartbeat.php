<?php

namespace Vvdboogaard\Heartbeat;

use GuzzleHttp\Client;

class Heartbeat
{
    protected $http;

    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    public function signal(string $url, array $options = []): void
    {
        $method = $options['method'] ?? 'get';

        $this->http->request($method, $url, $options);
    }
}
