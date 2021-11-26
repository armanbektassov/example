<?php

namespace Amarkets\Events\Enum;


class EventEnum
{
    public const ADAPTER_PAYMENT_REGISTERED = [
        'label' => 'adapterPaymentRegistered',
        'value' => 'adapter_payment_registered'
    ];
    public const ADAPTER_PAYMENT_SENT_REQUEST = [
        'label' => 'adapterPaymentSentRequest',
        'value' => 'adapter_payment_sent_request'
    ];
    public const ADAPTER_PAYMENT_GOT_CALLBACK = [
        'label' => 'adapterPaymentGotCallback',
        'value' => 'adapter_payment_got_callback'
    ];
    public const ADAPTER_PAYMENT_SENT_CALLBACK = [
        'label' => 'adapterPaymentSentCallback',
        'value' => 'adapter_payment_sent_callback'
    ];
    public const ADAPTER_WITHDRAWAL_REGISTERED = [
        'label' => 'adapterWithdrawalRegistered',
        'value' => 'adapter_withdrawal_registered'
    ];
    public const ADAPTER_WITHDRAWAL_SENT_REQUEST = [
        'label' => 'adapterWithdrawalSentRequest',
        'value' => 'adapter_withdrawal_sent_request'
    ];
    public const ADAPTER_WITHDRAWAL_GOT_CALLBACK = [
        'label' => 'adapterWithdrawalGotCallback',
        'value' => 'adapter_withdrawal_got_callback'
    ];
    public const ADAPTER_PAYMENT_ERROR = [
        'label' => 'adapterPaymentError',
        'value' => 'adapter_payment_error'
    ];

    public static function labels(): array
    {
        return [
            self::ADAPTER_PAYMENT_REGISTERED['label'],
            self::ADAPTER_PAYMENT_SENT_REQUEST['label'],
            self::ADAPTER_PAYMENT_GOT_CALLBACK['label'],
            self::ADAPTER_PAYMENT_SENT_CALLBACK['label'],
            self::ADAPTER_WITHDRAWAL_REGISTERED['label'],
            self::ADAPTER_WITHDRAWAL_SENT_REQUEST['label'],
            self::ADAPTER_WITHDRAWAL_GOT_CALLBACK['label'],
            self::ADAPTER_PAYMENT_ERROR['label'],
        ];
    }

    public static function values(): array
    {
        return [
            self::ADAPTER_PAYMENT_REGISTERED['value'],
            self::ADAPTER_PAYMENT_SENT_REQUEST['value'],
            self::ADAPTER_PAYMENT_GOT_CALLBACK['value'],
            self::ADAPTER_PAYMENT_SENT_CALLBACK['value'],
            self::ADAPTER_WITHDRAWAL_REGISTERED['value'],
            self::ADAPTER_WITHDRAWAL_SENT_REQUEST['value'],
            self::ADAPTER_WITHDRAWAL_GOT_CALLBACK['value'],
            self::ADAPTER_PAYMENT_ERROR['value'],
        ];
    }
}

