<?php

namespace Service;

use AbstractTestCase;
use Xovi\Sdk\Services\Keywords\KeywordsService;
use Xovi\Sdk\Services\Keywords\Result\RankDomainResult;
use Xovi\Sdk\Services\Keywords\Result\SearchEngineResult;

include_once __DIR__ . '/../AbstractTestCase.php';

class KeywordsServiceTest extends AbstractTestCase
{
    private function getKeywordsService(): KeywordsService
    {
        return $this->getClient()->getKeywordsService();
    }

    public function testServiceCreation(): void
    {
        $service = $this->getKeywordsService();
        $this->assertInstanceOf(KeywordsService::class, $service);
    }

    public function testGetRank(): void
    {
        $service = $this->getKeywordsService();
        $domains = $service->getRank('google.de');

        $this->assertEquals(500, count($domains));

        $this->assertInstanceOf(RankDomainResult::class, $domains[0]);
    }

    public function testGetSearchEngines(): void
    {
        $service = $this->getKeywordsService();
        $searchEngines = $service->getSearchEngines();

        $this->assertGreaterThan(0, count($searchEngines));

        $this->assertInstanceOf(SearchEngineResult::class, $searchEngines[0]);
    }
}
