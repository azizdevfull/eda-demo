<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use Illuminate\Support\Facades\Log;

class SendOrderEmail
{
    public function __construct() {}

    public function handle(OrderCreated $event): void
    {
        Log::info('Email yuborildi: '.$event->order->id);
    }
}
