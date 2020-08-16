<?php

namespace MuCTS\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \MuCTS\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
