<?php

namespace Amarkets\Events\Data;

use Amarkets\Events\Data\Validation\EventTypeValidator;

class EventData extends AbstractData
{
    public string $uuid;
    public string $type;
    public string $sentAt;
    public int $version = 1;
    public string $publisher;
    public MessageData $data;

    /**
     * @throws \Amarkets\Events\Data\Exceptions\ValidationException
     */
    public function validateEnum(string $property, string $value): void
    {
        if ($property === 'type') {
            EventTypeValidator::validate(['type' => $value]);
        }
    }
}
