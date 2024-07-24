<?php

namespace Xovi\Sdk;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\RequestOptions;
use Xovi\Sdk\Exception\ApiException;
use Xovi\Sdk\Exception\InvalidApiKeyException;
use Xovi\Sdk\Exception\ParameterMissingException;
use Xovi\Sdk\Services\AddressBook\AddressBookService;
use Xovi\Sdk\Services\Keywords\KeywordsService;
use Xovi\Sdk\Services\Links\LinksService;
use Xovi\Sdk\Services\Monitoring\MonitoringService;
use Xovi\Sdk\Services\Project\ProjectService;
use Xovi\Sdk\Services\Report\ReportService;
use Xovi\Sdk\Services\Sea\SeaService;
use Xovi\Sdk\Services\User\UserService;

class Client
{
    private const API_ROOT = 'https://suite.xovi.net/api/';

    private string $key;

    private ClientInterface $client;

    public function __construct(string $key, ClientInterface $client = null)
    {
        $this->key = $key;

        if ($client) {
            $this->client = $client;
        } else {
            $this->client = new \GuzzleHttp\Client();
        }
    }

    private function createGetUri(array $arrayParams, array $params = []): Uri
    {
        if (array_key_exists('format', $params)) {
            $params['format'] = $arrayParams['format'];
            unset($arrayParams['format']);
        }

        $arrayParams = array_merge($arrayParams, $params);
        $getParams = implode('/', $arrayParams);
        return new Uri(self::API_ROOT . $getParams);
    }

    public function call(string $service, string $method, array $params = [], string $httpMethod = 'GET')
    {
        $arrayParams = array(
            'service' => $service,
            'method' => $method,
            'key' => $this->key,
            'format' => 'json',
        );

        if ($httpMethod === 'GET') {
            $uri = $this->createGetUri($arrayParams, $params);
            $response = $this->client->get($uri);
        } else if ($httpMethod === 'POST') {
            $uri = $this->createGetUri($arrayParams);
            $response = $this->client->post($uri, [RequestOptions::FORM_PARAMS => $params]);
        } else {
            throw new \RuntimeException('Unknown HTTP method: ' . $httpMethod);
        }

        $result = json_decode((string)$response->getBody(), true);

        if (!array_key_exists('apiErrorCode', $result)) {
            throw new ApiException('No valid API response returned');
        }

        if ($result['apiErrorCode'] !== 0) {
            if ($result['apiErrorCode'] === 2) {
                throw new InvalidApiKeyException();
            } else if ($result['apiErrorMessage'] === "result empty") {
                return [];
            } else if ($result['apiErrorMessage'] === "param missing") {
                throw new ParameterMissingException($result['paramname']);
            } else {
                var_dump($result);
                throw new ApiException($result['apiErrorMessage']);
            }
        }

        return $result['apiResult'];
    }

    public function getUserService(): UserService
    {
        return new UserService($this);
    }

    public function getKeywordsService(): KeywordsService
    {
        return new KeywordsService($this);
    }

    public function getAddressBookService(): AddressBookService
    {
        return new AddressBookService($this);
    }

    public function getLinksService(): LinksService
    {
        return new LinksService($this);
    }

    public function getMonitoringService(): MonitoringService
    {
        return new MonitoringService($this);
    }

    public function getProjectService(): ProjectService
    {
        return new ProjectService($this);
    }

    public function getReportService(): ReportService
    {
        return new ReportService($this);
    }

    public function getSeaService(): SeaService
    {
        return new SeaService($this);
    }
}
