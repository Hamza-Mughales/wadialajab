<?php

namespace App\Services;

class SmsService
{
    /**
     * Send an SMS message to a phone number.
     *
     * @param  string  $phone
     * @param  string  $message
     * @return array
     */
    public function send(string $phone, string $message): array
    {
        // Placeholder implementation - integrate real SMS provider later
        return [
            'status' => 'mocked',
            'phone'  => $phone,
            'message'=> $message,
        ];
    }
}


