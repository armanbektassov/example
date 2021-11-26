<?php


namespace Amarkets\Events\Data;


use Amarkets\Events\Data\Transformers\DataInterface;

abstract class AbstractData implements DataInterface
{
    public function validateEnum(string $property, string $value): void
    {
    }
}
