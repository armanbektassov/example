<?php

namespace Amarkets\Events\Data;

use Amarkets\Events\Data\Validation\SubjectTypeValidator;

class SubjectData extends AbstractData
{
    public string $uuid;
    public string $type;

    /**
     * @throws \Amarkets\Events\Data\Exceptions\ValidationException
     */
    public function validateEnum(string $property, string $value): void
    {
        if ($property === 'type') {
            SubjectTypeValidator::validate(['type' => $value]);
        }
    }
}
