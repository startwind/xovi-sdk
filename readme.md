# XOVI SDK

> [!NOTE]  
> This package is work in progress. Not all methods are implemented yet. Please do not use it in you production code yet. 

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
