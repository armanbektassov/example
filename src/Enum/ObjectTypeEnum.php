<?php

namespace Amarkets\Events\Enum;


class ObjectTypeEnum
{
    public const PAYMENT = 'payment';
    public const WITHDRAWAL = 'withdrawal';

    public static function values(): array
    {
        return [
          self::PAYMENT,
          self::WITHDRAWAL
        ];
    }
}
