<?php

namespace MuCTS\Contracts\Database\Eloquent;

interface Castable
{
    /**
     * Get the name of the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return string
     * @return string|\MuCTS\Contracts\Database\Eloquent\CastsAttributes|\MuCTS\Contracts\Database\Eloquent\CastsInboundAttributes
     */
    public static function castUsing(array $arguments);
}
