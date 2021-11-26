<?php

namespace Amarkets\Events\Data\Transformers;

interface TransformerInterface
{
    public static function transform(DataInterface $classData, array $data): DataInterface;
}
