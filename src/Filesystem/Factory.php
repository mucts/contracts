<?php

namespace MuCTS\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
