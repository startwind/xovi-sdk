<?php

namespace Xovi\Sdk\Services\Keywords\Result;

class RankDomainResult
{
    private string $domain;
    private int $currentSeoRank;
    private float $currentStaticOvi;
    private int $currentKeywords;
    private int $pastSeoRank;
    private int $absoluteSeoRankDiff;
    private float $relativeSeoRankDiff;
    private float $pastStaticOvi;
    private float $absoluteStaticOviDiff;
    private float $relativeStaticOviDiff;
    private int $pastKeywords;
    private int $absoluteKeywordsDiff;
    private float $relativeKeywordsDiff;

    /**
     * @param string $domain
     * @param int $currentSeoRank
     * @param float $currentStaticOvi
     * @param int $currentKeywords
     * @param int $pastSeoRank
     * @param int $absoluteSeoRankDiff
     * @param float $relativeSeoRankDiff
     * @param float $pastStaticOvi
     * @param float $absoluteStaticOviDiff
     * @param float $relativeStaticOviDiff
     * @param int $pastKeywords
     * @param int $absoluteKeywordsDiff
     * @param float $relativeKeywordsDiff
     */
    public function __construct(string $domain, int $currentSeoRank, float $currentStaticOvi, int $currentKeywords, int $pastSeoRank, int $absoluteSeoRankDiff, float $relativeSeoRankDiff, float $pastStaticOvi, float $absoluteStaticOviDiff, float $relativeStaticOviDiff, int $pastKeywords, int $absoluteKeywordsDiff, float $relativeKeywordsDiff)
    {
        $this->domain = $domain;
        $this->currentSeoRank = $currentSeoRank;
        $this->currentStaticOvi = $currentStaticOvi;
        $this->currentKeywords = $currentKeywords;
        $this->pastSeoRank = $pastSeoRank;
        $this->absoluteSeoRankDiff = $absoluteSeoRankDiff;
        $this->relativeSeoRankDiff = $relativeSeoRankDiff;
        $this->pastStaticOvi = $pastStaticOvi;
        $this->absoluteStaticOviDiff = $absoluteStaticOviDiff;
        $this->relativeStaticOviDiff = $relativeStaticOviDiff;
        $this->pastKeywords = $pastKeywords;
        $this->absoluteKeywordsDiff = $absoluteKeywordsDiff;
        $this->relativeKeywordsDiff = $relativeKeywordsDiff;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getCurrentSeoRank(): int
    {
        return $this->currentSeoRank;
    }

    public function getCurrentStaticOvi(): float
    {
        return $this->currentStaticOvi;
    }

    public function getCurrentKeywords(): int
    {
        return $this->currentKeywords;
    }

    public function getPastSeoRank(): int
    {
        return $this->pastSeoRank;
    }

    public function getAbsoluteSeoRankDiff(): int
    {
        return $this->absoluteSeoRankDiff;
    }

    public function getRelativeSeoRankDiff(): float
    {
        return $this->relativeSeoRankDiff;
    }

    public function getPastStaticOvi(): float
    {
        return $this->pastStaticOvi;
    }

    public function getAbsoluteStaticOviDiff(): float
    {
        return $this->absoluteStaticOviDiff;
    }

    public function getRelativeStaticOviDiff(): float
    {
        return $this->relativeStaticOviDiff;
    }

    public function getPastKeywords(): int
    {
        return $this->pastKeywords;
    }

    public function getAbsoluteKeywordsDiff(): int
    {
        return $this->absoluteKeywordsDiff;
    }

    public function getRelativeKeywordsDiff(): float
    {
        return $this->relativeKeywordsDiff;
    }

    public static function fromArray(array $array): self
    {
        return new self(
            $array['domain'],
            $array['currentSeorank'],
            $array['currentStaticOvi'],
            $array['currentKeywords'],
            $array['pastSeorank'],
            $array['absoluteSeorankDiff'],
            $array['relativeSeorankDiff'],
            $array['pastStaticOvi'],
            $array['absoluteStaticOviDiff'],
            $array['relativeStaticOviDiff'],
            $array['pastKeywords'],
            $array['absoluteKeywordsDiff'],
            $array['relativeKeywordsDiff'],
        );
    }
}
