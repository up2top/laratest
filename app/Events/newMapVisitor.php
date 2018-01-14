<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class newMapVisitor implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $var;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($var)
    {
        //
        $this->var = $var;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('mapChannel');
    }
}
