<?php

namespace MuCTS\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
