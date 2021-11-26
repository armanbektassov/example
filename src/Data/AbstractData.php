<?php


namespace Amarkets\Events\Data;


abstract class AbstractData implements DataInterface
{
    public function validateEnum(string $property, string $value): void
    {
    }
}
