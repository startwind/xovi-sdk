# XOVI SDK

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
