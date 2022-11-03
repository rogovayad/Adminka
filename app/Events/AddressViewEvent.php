<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Address;
use App\Jobs\ProcAddr;
use Illuminate\Support\Facades\Log;

class AddressViewEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $address;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Address $address)
   // public function __construct(public int $count)
    {
        $this->address = $address;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
       // return new PrivateChannel('channel-name');
        return[];
    }
}
