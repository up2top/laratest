<?php

namespace App\Listeners;

use App\Events\newMapVisitor;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class alertAboutNewMapVisitor
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
     * @param  newMapVisitor  $event
     * @return void
     */
    public function handle(newMapVisitor $event)
    {
        //
    }
}
