<?php

namespace MuCTS\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Redis\Connection
     */
    public function connection($name = null);
}
