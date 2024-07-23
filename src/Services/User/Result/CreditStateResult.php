<?php

namespace Xovi\Sdk\Services\User\Result;

class CreditStateResult
{
    private int $creditAmount;
    private int $additionalCreditAmount;
    private int $bookedCreditAmount;
    private int $refillIntervall;
    private \DateTime $lastRefill;
    private int $creditsLeft;
    private int $creditsUsed;

    public function __construct(int $creditAmount, int $additionalCreditAmount, int $bookedCreditAmount, int $refillIntervall, string $lastRefill, int $creditsLeft, int $creditsUsed)
    {
        $this->creditAmount = $creditAmount;
        $this->additionalCreditAmount = $additionalCreditAmount;
        $this->bookedCreditAmount = $bookedCreditAmount;
        $this->refillIntervall = $refillIntervall;
        $this->lastRefill = new \DateTime(strtotime($lastRefill));
        $this->creditsLeft = $creditsLeft;
        $this->creditsUsed = $creditsUsed;
    }

    public function getCreditAmount(): int
    {
        return $this->creditAmount;
    }

    public function getAdditionalCreditAmount(): int
    {
        return $this->additionalCreditAmount;
    }

    public function getBookedCreditAmount(): int
    {
        return $this->bookedCreditAmount;
    }

    public function getRefillIntervall(): int
    {
        return $this->refillIntervall;
    }

    public function getLastRefill(): \DateTime
    {
        return $this->lastRefill;
    }

    public function getCreditsLeft(): int
    {
        return $this->creditsLeft;
    }

    public function getCreditsUsed(): int
    {
        return $this->creditsUsed;
    }

    public static function fromArray(array $array): self
    {
        return new self(
            $array['creditamount'],
            $array['additionalCreditamount'],
            $array['bookedCreditamount'],
            $array['refillintervall'],
            $array['lastrefill'],
            $array['creditsleft'],
            $array['creditsused']
        );
    }
}
