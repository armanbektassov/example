<?php


namespace Amarkets\Events\Handler\Pipeline;


class MakeMessage
{
    /**
     * Make the message.
     *
     * @param array $data
     * @param \Closure $next
     *
     * @return mixed|null
     */
    public function handle(array $data, \Closure $next)
    {
        return $next([
            'uuid' => $data->uuid->toString(),
            'type' => $this->makeEventTypeName($data->type),
            'sent_at' => $data->sentAt->toIso8601String(),
            'version' => $data->version,
            'publisher' => $data->publisher,
            'data' => [
                'subject' => $data->data->subject->toArray(),
                'object' => $data->data->object->toArray(),
                'action' => $data->data->action,
                'details' => $data->data->details,
            ]
        ]);
    }

}
