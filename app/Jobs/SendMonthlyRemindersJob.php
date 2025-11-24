<?php

namespace App\Jobs;

use App\Models\ReminderLog;
use App\Models\Subscriber;
use App\Services\SmsService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMonthlyRemindersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        // No state needed; dependencies injected into handle()
    }

    public function handle(SmsService $smsService): void
    {
        $message = 'تذكير بالسداد الشهري لصندوق وادي العجب الخيري. بارك الله فيك.';

        Subscriber::chunk(100, function ($subscribers) use ($smsService, $message) {
            foreach ($subscribers as $subscriber) {
                try {
                    $smsService->send($subscriber->phone, $message);

                    ReminderLog::create([
                        'subscriber_id' => $subscriber->id,
                        'message'       => $message,
                        // For now treat mocked as "sent"
                        'status'        => 'sent',
                    ]);
                } catch (\Throwable $e) {
                    ReminderLog::create([
                        'subscriber_id' => $subscriber->id,
                        'message'       => $message,
                        'status'        => 'failed',
                    ]);
                }
            }
        });
    }
}


