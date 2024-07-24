<?php

namespace Xovi\Sdk\Services;

use GuzzleHttp\Psr7\Request;
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

    protected function callPost(string $method, array $params = [])
    {
        return $this->client->call(static::SERVICE, $method, $params, 'POST');
    }
}
