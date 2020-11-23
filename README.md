# Transcription

> https://packagist.org/packages/codemonkey76/transcription

## Features
- Transcribe audio files.
- Facade Included.

## Requirements
This package uses the Amazon AWS Transcribe service, it transcribes files that are located on S3 Storage, so you will need an Amazon AWS account, and need to setup an S3 bucket with approperiate permissions. You can then set the following environment variables to configure the service:
```
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_BUCKET=
AWS_DEFAULT_REGION=

TRANSCRIPTION_FOLDER=
TRANSCRIPTION_LANGUAGE=
TRANSCRIPTION_MEDIA=
TRANSCRIPTION_DELAY=
```

## Installation
Simply require the package and Laravel will Auto-Discover the Service Provider.
```
composer require codemonkey76/transcription
```

Publish the config file
```
php artisan vendor:publish --provider="Codemonkey76\Transcription\TranscriptionServiceProvider"
```

## Usage:

```php
<?php
use Codemonkey76\Transcription;

$jobName = Transcription::start($file);
sleep(60);
$result = Transcription::status($jobName);

```