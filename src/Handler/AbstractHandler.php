<?php


namespace Amarkets\Events\Handler;

use Illuminate\Pipeline\Pipeline;

abstract class AbstractHandler
{
    /**
     * @var array
     */
    public array $pipeline = [];

    public function pipe(array $data)
    {
        return app(Pipeline::class)
            ->send($data)
            ->through($this->pipeline)
            ->then(function ($message) {
                return $message;
            });
    }
}
