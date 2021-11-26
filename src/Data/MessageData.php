<?php

namespace Amarkets\Events\Data;


class MessageData extends AbstractData
{
    public SubjectData $subject;
    public ObjectData $object;
    public string $action;
    public array $details;
}
