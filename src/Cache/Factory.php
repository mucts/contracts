<?php

namespace MuCTS\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Cache\Repository
     */
    public function store($name = null);
}
