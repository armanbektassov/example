<?php


namespace Amarkets\Events\Logger;

use Illuminate\Support\Facades\Log;

class Logger
{
    public function error(string $message, array $context)
    {
        Log::error($message, $context);
    }
}
