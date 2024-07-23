<?php

namespace Xovi\Sdk\Services\Keywords;

use Xovi\Sdk\Services\Service;
use Xovi\Sdk\Services\User\Result\SearchEngineResult;
use Xovi\Sdk\Services\User\Result\XoviLimitsResult;

class KeywordsService extends Service
{
    protected const SERVICE = 'keywords';

    protected const METHOD_GET_RANK = 'getRank';
    protected const METHOD_GET_SEARCH_ENGINES = 'getSearchEngines';


    public function getRank(string $searchEngine, int $limit = 500, int $skip = 0): XoviLimitsResult
    {
        $parameters = [
            'sengine' => $searchEngine,
            'format' => 'x',
            'limit' => $limit,
            'skip' => $skip
        ];

        $result = $this->call(self::METHOD_GET_RANK, $parameters);

        return XoviLimitsResult::fromArray($result);
    }

    /**
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
