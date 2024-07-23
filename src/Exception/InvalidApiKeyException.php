<?php

namespace Xovi\Sdk\Exception;

class InvalidApiKeyException extends ApiException
{
    public function __construct()
    {
        parent::__construct('Invalid API key');
    }
}
