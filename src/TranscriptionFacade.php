<?php

namespace Codemonkey76\Transcription;

use Illuminate\Support\Facades\Facade;

class TranscriptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'transcription';
    }
}