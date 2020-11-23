<?php

return [
	'credentials' => [
		'key' => env('AWS_ACCESS_KEY_ID'),
		'secret' => env('AWS_SECRET_ACCESS_KEY')
	],
	'bucket' => env('AWS_BUCKET'),
	'folder' => env('TRANSCRIPTION_FOLDER', '/voicemail'),
	'region' => env('AWS_DEFAULT_REGION', 'ap-southeast-2'),

	'language_code' => env('TRANSCRIPTION_LANGUAGE', 'en-AU'),
	'media_format' => env('TRANSCRIPTION_MEDIA', 'wav'),
	'delay' => env('TRANSCRIPTION_DELAY', '60')
];