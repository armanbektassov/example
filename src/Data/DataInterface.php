<?php


namespace Amarkets\Events\Data;


interface DataInterface
{
    public function validateEnum(string $property, string $value): void;
}
