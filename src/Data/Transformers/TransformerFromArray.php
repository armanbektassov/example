<?php

namespace Amarkets\Events\Data\Transformers;

use Amarkets\Events\Data\Exceptions\TransformerErrorException;
use ReflectionClass;
use ReflectionProperty;

class TransformerFromArray implements TransformerInterface
{
    /**
     * @throws \Amarkets\Events\Data\Exceptions\TransformerErrorException
     */
    public static function transform(DataInterface $classData, array $data): DataInterface
    {
        $classData = new $classData();
        $reflect = new ReflectionClass($classData);
        $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($props as $prop) {
            if (empty($data[$prop->getName()])) {
                throw new TransformerErrorException('Invalid data in transformer', 400);
            }

            $value = $data[$prop->getName()];

            if ($classData->{$prop->getName()} instanceof DataInterface && is_array($data[$prop->getName()])) {
                $value = self::transform($classData->{$prop->getName()}, $data[$prop->getName()]);
            }

            $classData->validateEnum($prop->getName(), $value);

            $classData->{$prop->getName()} = $value;
        }

        return $classData;
    }
}
