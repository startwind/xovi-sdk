<?php

namespace Xovi\Sdk\Services\Keywords;

use Xovi\Sdk\Services\Keywords\Result\RankDomainResult;
use Xovi\Sdk\Services\Keywords\Result\SearchEngineResult;
use Xovi\Sdk\Services\Service;

class KeywordsService extends Service
{
    protected const SERVICE = 'keywords';

    protected const METHOD_GET_RANK = 'getRank';
    protected const METHOD_GET_SEARCH_ENGINES = 'getSearchEngines';

    /**
     * Returns the strongest domains within a search engine sorted by OVI.
     *
     * @return RankDomainResult[]
     */
    public function getRank(string $searchEngine, int $limit = 500, int $skip = 0): array
    {
        $parameters = [
            'sengine' => $searchEngine,
            'format' => 'x',
            'limit' => $limit,
            'skip' => $skip
        ];

        $result = $this->call(self::METHOD_GET_RANK, $parameters);

        $domains = [];

        foreach ($result as $domain) {
            $domains[] = RankDomainResult::fromArray($domain);
        }

        return $domains;
    }

    /**
     * Returns all daily crawled or weekly crawled search engines. (Contains data relevant for other functions).
     *
     * @return SearchEngineResult[]
     */
    public function getSearchEngines(): array
    {
        $result = $this->call(self::METHOD_GET_SEARCH_ENGINES);

        $searchEngines = [];

        foreach ($result as $engine) {
            $searchEngines[] = SearchEngineResult::fromArray($engine);
        }

        return $searchEngines;
    }
}
