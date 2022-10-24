<?php

namespace App\Listeners;

use App\Events\AddressViewEvent;
use App\Providers\EventServiceProvider;
use App\Models\Address;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AddressActionsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AddressViewEvent  $event
     * @return void
     */
    public function handle(AddressViewEvent $event)
    {
        Log::channel('slack')->info('An informational message.');
        $event->address->paddress.= '(listener)';
        $event->address->save();
    }
}
