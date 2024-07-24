<?php

namespace Xovi\Sdk\Exception;

class ParameterMissingException extends ApiException
{
    public function __construct(string $parameterName)
    {
        parent::__construct('Mandatory parameter "' . $parameterName . '" is missing');
    }
}
