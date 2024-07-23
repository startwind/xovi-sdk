<?php

namespace Xovi\Sdk\Services\User\Result;

use Xovi\Sdk\Util\ResultHelper;

class XoviLimitsResult
{
    private int $monitoringKeywords;
    private int $socialUrls;
    private int $socialKeywords;
    private int $onpageUrls;
    private int $onpageThreads;
    private int $subaccountsReadwrite;
    private int $subaccountsReadonly;
    private int $apiCredits;
    private int $freeExportCredits;
    private int $socialProfileProfiles;
    private int $linkmarkerAnalysises;
    private int $linkmarkerUrls;
    private int $webmasterDomains;

    public function __construct(
        int $monitoringKeywords,
        int $socialUrls,
        int $socialKeywords,
        int $onpageUrls,
        int $onpageThreads,
        int $subaccountsReadwrite,
        int $subaccountsReadonly,
        int $apiCredits,
        int $freeExportCredits,
        int $socialProfileProfiles,
        int $linkmarkerAnalysises,
        int $linkmarkerUrls,
        int $webmasterDomains)
    {
        $this->monitoringKeywords = $monitoringKeywords;
        $this->socialUrls = $socialUrls;
        $this->socialKeywords = $socialKeywords;
        $this->onpageUrls = $onpageUrls;
        $this->onpageThreads = $onpageThreads;
        $this->subaccountsReadwrite = $subaccountsReadwrite;
        $this->subaccountsReadonly = $subaccountsReadonly;
        $this->apiCredits = $apiCredits;
        $this->freeExportCredits = $freeExportCredits;
        $this->socialProfileProfiles = $socialProfileProfiles;
        $this->linkmarkerAnalysises = $linkmarkerAnalysises;
        $this->linkmarkerUrls = $linkmarkerUrls;
        $this->webmasterDomains = $webmasterDomains;
    }

    public function getMonitoringKeywords(): int
    {
        return $this->monitoringKeywords;
    }

    public function getSocialUrls(): int
    {
        return $this->socialUrls;
    }

    public function getSocialKeywords(): int
    {
        return $this->socialKeywords;
    }

    public function getOnPageUrls(): int
    {
        return $this->onpageUrls;
    }

    public function getOnPageThreads(): int
    {
        return $this->onpageThreads;
    }

    public function getSubaccountsReadwrite(): int
    {
        return $this->subaccountsReadwrite;
    }

    public function getSubaccountsReadonly(): int
    {
        return $this->subaccountsReadonly;
    }

    public function getApiCredits(): int
    {
        return $this->apiCredits;
    }

    public function getFreeExportCredits(): int
    {
        return $this->freeExportCredits;
    }

    public function getSocialProfileProfiles(): int
    {
        return $this->socialProfileProfiles;
    }

    public function getLinkMarkerAnalyses(): int
    {
        return $this->linkmarkerAnalysises;
    }

    public function getLinkMarkerUrls(): int
    {
        return $this->linkmarkerUrls;
    }

    public function getWebmasterDomains(): int
    {
        return $this->webmasterDomains;
    }

    public static function fromArray(array $result): self
    {
        $array = ResultHelper::toKeyValueArray($result);

        return new self(
            $array['monitoringKeywords'],
            $array['socialUrls'],
            $array['socialKeywords'],
            $array['onpageUrls'],
            $array['onpageThreads'],
            $array['subaccountsReadwrite'],
            $array['subaccountsReadonly'],
            $array['apiCredits'],
            $array['freeExportCredits'],
            $array['socialProfileProfiles'],
            $array['linkmarkerAnalysises'],
            $array['linkmarkerUrls'],
            $array['webmasterDomains']
        );
    }
}
