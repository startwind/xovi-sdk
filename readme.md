# XOVI SDK

> [!NOTE]  
> This package is work in progress. Not all methods are implemented yet. Please only use it in you production code if you are a real badass. 

## Install

```shell
composer require xovi/sdk
```

## Example

```php
$client = new \Xovi\Sdk\Client('myPersonalKey');
$domains = $client->getKeywordsService()->getRank('google.de');

foreach($domains as $domain) {
    echo $domain->getDomain() . "\n";
}
```

## Implemented Services and Methods

### Address Book

- `addPerson`
- `getPersons`
- `getOrganisations`

### Keywords

- `getRank`
- `getSearchEngines`

### User

- `getXoviLimits`
- `getCreditState`
