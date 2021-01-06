# Kulfi-PHP
Real-time API gateway for next-gen apps

[![Latest Stable Version](https://poser.pugx.org/codeweird/kulfi-php/v/stable)](https://packagist.org/packages/codeweird/kulfi-php)
[![Total Downloads](https://poser.pugx.org/codeweird/kulfi-php/downloads)](https://packagist.org/packages/codeweird/kulfi-php)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

## Installation
Preferred way to install is with Composer.

```bash
 composer require codeweird/kulfi-php
```

## Bringing Real-time data to your apps

- Initiate Kulfi Client

```php
require_once __DIR__ . '/vendor/autoload.php';

use codeweird\Kulfi\Kulfi;

$client = new Kulfi();
```

- Connect Client with Kulfi API endpoint using API KEY & APP NAME configured in Kulfi Web Console (https://kulfi.app/console)

```php
$client->connect("API_KEY","APP_NAME","API_ENDPOINT");
```

- Push real-time data to all connected clients through channels

```php
$client->push("DATA","CHANNEL_NAME");

//example
$client->push("25","home/Score");
```

- Get latest real-time data from the channel

```php
echo $client->pull("CHANNEL_NAME");

//example
echo $client->pull("home/Score");
```

You're app is now real-time without any web server and DB. 


## Other Platform Libraries
Available for Android & JavaScript as of now
