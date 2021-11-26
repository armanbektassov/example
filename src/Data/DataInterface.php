<?php


namespace Amarkets\Events\Data\Transformers;


interface DataInterface
{
    public function validateEnum(string $property, string $value): void;
}
