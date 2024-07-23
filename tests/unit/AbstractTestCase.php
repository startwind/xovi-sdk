<?php

use PHPUnit\Framework\TestCase;
use Xovi\Sdk\Client;

abstract class AbstractTestCase extends TestCase
{
    public function getClient(): Client
    {
        return new Client($_ENV['XOVI_API_KEY']);
    }
}
