<?php

namespace Amarkets\Events\Data\Transformers;

use Amarkets\Events\Data\DataInterface;

interface TransformerInterface
{
    public static function transform(DataInterface $classData, array $data): DataInterface;
}
