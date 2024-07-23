# XOVI SDK

## Example

```php
$client = new \Xovi\Sdk\Client('myPersonalKey');
$domains = $client->getKeywordsService()->getRank('google.de');

foreach($domains as $domain) {
    echo $domain->getDomain() . "\n";
}
```
    
