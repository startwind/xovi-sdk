<?php

namespace Xovi\Sdk\Services\User\Result;

class SearchEngineResult
{
    private int $id;
    private string $host;
    private string $country;

    private string $city;
    private string $lang;
    private string $name;

    public function __construct(int $id, string $host, string $country, string $city, string $lang, string $name)
    {
        $this->id = $id;
        $this->host = $host;
        $this->country = $country;
        $this->city = $city;
        $this->lang = $lang;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public static function fromArray(array $array): self
    {
        return new self(
            $array['id'],
            $array['host'],
            $array['country'],
            $array['city'],
            $array['lang'],
            $array['name']
        );
    }
}
