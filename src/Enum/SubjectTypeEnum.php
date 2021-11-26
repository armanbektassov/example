<?php

namespace Amarkets\Events\Enum;


class SubjectTypeEnum
{
    public const ADAPTER = 'adapter';

    public static function values(): array
    {
        return [
            self::ADAPTER
        ];
    }
}
