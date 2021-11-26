<?php

namespace Amarkets\Events\Facade;

use Amarkets\Events\EventManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static push(array $data)
 */
class Event extends Facade
{
    /**
     * Get facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor(): string
    {
        return EventManager::class;
    }
}
