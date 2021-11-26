<?php


namespace Amarkets\Events\Handler;


use Amarkets\Events\Handler\Pipeline\CheckEnvironment;
use Amarkets\Events\Handler\Pipeline\MakeMessage;
use Amarkets\Events\Handler\Pipeline\ValidateData;

class PushHandler extends AbstractHandler implements HandlerInterface
{
    public array $pipeline = [
        ValidateData::class,
        CheckEnvironment::class,
        MakeMessage::class
    ];
}
