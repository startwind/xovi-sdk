<?php

namespace Xovi\Sdk\Exception;

class NotImplementedException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('This method is not yet implemented.');
    }
}
