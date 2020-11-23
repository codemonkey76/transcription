<?php

namespace Codemonkey76\Transcription;

use Illuminate\Support\ServiceProvider;
use Codemonkey76\Transcription\TranscriptionService;
use Illuminate\Contracts\Support\DeferrableProvider;

class TranscriptionServiceProvider extends ServiceProvider implements DeferrableProvider
{
	public function boot()
	{
		$this->publishes([
			__DIR__.'/config/config.php' => config_path('transcription.php')
		]);
	}
	public function register()
	{
		$this->app->bind('transcription', TranscriptionService::class);
	}

	public function provides()
	{
		return ['transcription'];
	}
}

?>
