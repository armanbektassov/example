<?php

namespace Amarkets\Events\Data;

use Amarkets\Events\Data\Validation\ObjectTypeValidator;

class ObjectData extends AbstractData
{
    public string $uuid;
    public string $type;

    /**
     * @throws \Amarkets\Events\Data\Exceptions\ValidationException
     */
    public function validateEnum(string $property, string $value): void
    {
        if ($property === 'type') {
            ObjectTypeValidator::validate(['type' => $value]);
        }
    }
}
