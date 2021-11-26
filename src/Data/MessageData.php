<?php

namespace Amarkets\Events\Data;

use App\AWSEvents\DTO\EventMessage\ObjectData;
use App\AWSEvents\DTO\EventMessage\SubjectData;

class MessageData extends AbstractData
{
    public SubjectData $subject;
    public ObjectData $object;
    public string $action;
    public array $details;
}
