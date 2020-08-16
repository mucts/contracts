<?php

namespace MuCTS\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Broadcasting\Broadcaster
     */
    public function connection($name = null);
}
