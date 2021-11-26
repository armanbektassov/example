<?php

namespace Amarkets\Events\Enum;

return [
    'sns' => [
        'key' => env('PUBLISHER_SNS_KEY'),
        'secret' => env('PUBLISHER_SNS_SECRET'),
        'region' => env('PUBLISHER_SNS_REGION'),
    ],
    'events' => [
        'log_created' => env('EVENT_LOG_CREATED_ARN'), //'arn:aws:sns:eu-west-1:247606935658:alexey_test' - рудимент,

        EventEnum::ADAPTER_PAYMENT_REGISTERED['value'] => env('EVENT_ADAPTER_PAYMENT_REGISTERED'),
        EventEnum::ADAPTER_PAYMENT_SENT_REQUEST['value'] => env('EVENT_ADAPTER_PAYMENT_SEND_REQUEST'),
        EventEnum::ADAPTER_PAYMENT_GOT_CALLBACK['value'] => env('EVENT_ADAPTER_PAYMENT_GOT_CALLBACK'),
        EventEnum::ADAPTER_PAYMENT_SENT_CALLBACK['value'] => env('EVENT_ADAPTER_PAYMENT_SENT_CALLBACK'),
        EventEnum::ADAPTER_PAYMENT_ERROR['value'] => env('EVENT_ADAPTER_PAYMENT_ERROR'),

        EventEnum::ADAPTER_WITHDRAWAL_REGISTERED['value'] => env('EVENT_ADAPTER_WITHDRAWAL_REGISTERED'),
    ],
];
