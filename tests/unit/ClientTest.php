<?php

declare(strict_types=1);

include_once __DIR__ . '/AbstractTestCase.php';

class ClientTest extends AbstractTestCase
{
    public function testClientCreation(): void
    {
        $this->getClient();
        $this->assertTrue(true, 'Check if client was initiated.');
    }

    public function testInvalidApiKey(): void
    {
        $this->expectException(\Xovi\Sdk\Exception\InvalidApiKeyException::class);
        $client = new \Xovi\Sdk\Client('INVALID_API__KEY');
        $client->getUserService()->getXoviLimits();
    }
}
