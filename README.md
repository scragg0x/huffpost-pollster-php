huffpost-pollster-php
=====================
Simple API wrapper in PHP

API reference
-------------
http://elections.huffingtonpost.com/pollster/api

Example
-------
```php
$client = new HuffPost\Pollster();
$json = $client->poll(array('topic' => 'obama-job-approval'));
print_r($json);

```