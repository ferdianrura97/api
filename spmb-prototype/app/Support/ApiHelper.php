<?php

namespace App\Support;

class ApiHelper
{
    public static function response(array $data = [], string $message = 'OK', int $code = 200): array
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'meta' => [
                'mode' => 'dummy',
                'timestamp' => date(DATE_ATOM),
            ],
        ];
    }

    public static function needsBusinessDecision(array $items): array
    {
        return [
            'label' => 'perlu keputusan bisnis',
            'items' => $items,
        ];
    }
}
