<?php

namespace Xovi\Sdk\Services;

use Xovi\Sdk\Client;

abstract class Service
{
    protected const SERVICE = '';

    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function call(string $method, array $params = [])
    {
        return $this->client->call(static::SERVICE, $method, $params);
    }
}
