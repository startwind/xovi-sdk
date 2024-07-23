<?php

namespace Xovi\Sdk\Services\User;

use Xovi\Sdk\Exception\NotImplementedException;
use Xovi\Sdk\Services\Service;
use Xovi\Sdk\Services\User\Result\CreditStateResult;
use Xovi\Sdk\Services\User\Result\XoviLimitsResult;

class UserService extends Service
{
    protected const SERVICE = 'user';

    protected const METHOD_GET_XOVI_LIMITS = 'getXoviLimits';
    protected const METHOD_GET_SUBACCOUNTS = 'getSubaccounts';
    protected const METHOD_GET_CREDIT_STATE = 'getCreditstate';

    /**
     * Returns all usage limits of the tool.
     */
    public function getXoviLimits(): XoviLimitsResult
    {
        $result = $this->call(self::METHOD_GET_XOVI_LIMITS);
        return XoviLimitsResult::fromArray($result);
    }


    public function getSubaccounts()
    {
        throw new NotImplementedException();
        // $result = $this->call(self::METHOD_GET_SUBACCOUNTS);
    }

    /**
     * Returns the current status of your credit data.
     */
    public function getCreditState(): CreditStateResult
    {
        $result = $this->call(self::METHOD_GET_CREDIT_STATE);
        return CreditStateResult::fromArray($result);
    }
}
