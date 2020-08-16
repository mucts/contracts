<?php

namespace MuCTS\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \MuCTS\Contracts\Broadcasting\Channel|\MuCTS\Contracts\Broadcasting\Channel[]
     */
    public function broadcastOn();
}
