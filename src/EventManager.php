<?php


namespace Amarkets\Events;

use Amarkets\Events\Handler\HandlerInterface;
use Amarkets\Events\Logger\LoggerInterface;
use Exception;

class EventManager
{
    private $handler;
    private $logger;

    public function __construct(HandlerInterface $handler, LoggerInterface $logger)
    {
        $this->handler = $handler;
        $this->logger = $logger;
    }


    public function push(array $data)
    {
        try {
            $message = $this->handler->pipe($data);
            dispatch(new JournalJob($message['eventName'], json_encode($message)));

        } catch (Exception $exception) {
            $this->logger->error('EventManager: Message does not sent', [
                'extra' => [
                    'error' => $exception->getMessage(),
                ],
                'exception' => $exception,
            ]);

            throw new $exception;
        }
    }
}
