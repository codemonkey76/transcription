# Transcription

> https://packagist.org/packages/codemonkey76/transcription

## Features
- Transcribe audio files.
- Facade Included.

## Installation
Simply require the package and Laravel will Auto-Discover the Service Provider.
```
composer require codemonkey76/transcription
```

## Usage:

```php
<?php
use Codemonkey76\Transcription;

$jobName = Transcription::start($file);
sleep(60);
$result = Transcription::status($jobName);

```