<?php

namespace Service;

use AbstractTestCase;
use Xovi\Sdk\Services\User\Result\CreditStateResult;
use Xovi\Sdk\Services\User\Result\XoviLimitsResult;
use Xovi\Sdk\Services\User\UserService;

include_once __DIR__ . '/../AbstractTestCase.php';

class UserServiceTest extends AbstractTestCase
{
    public function testServiceCreation(): void
    {
        $service = $this->getUserService();
        $this->assertInstanceOf(UserService::class, $service);
    }

    private function getUserService(): UserService
    {
        return $this->getClient()->getUserService();
    }

    public function testGetXoviLimits()
    {
        $xoviLimitsResult = $this->getUserService()->getXoviLimits();
        $this->assertInstanceOf(XoviLimitsResult::class, $xoviLimitsResult);
    }

    public function testGetCreditState()
    {
        $xoviLimitsResult = $this->getUserService()->getCreditState();
        $this->assertInstanceOf(CreditStateResult::class, $xoviLimitsResult);
    }
}
