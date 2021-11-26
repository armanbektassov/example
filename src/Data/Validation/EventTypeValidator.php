<?php

namespace Amarkets\Events\Data\Validation;

use Amarkets\Events\Enum\EventEnum;

class EventTypeValidator extends AbstractValidator
{

    /**
     * @throws \Amarkets\Events\Data\Exceptions\ValidationException
     */
    public static function validate(array $request): void
    {
        (new self())->validator($request, [
            'type' => Rule::in(EventEnum::labels()),
        ]);
    }
}
