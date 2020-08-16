<?php

namespace MuCTS\Contracts\Mail;

interface Factory
{
    /**
     * Get a mailer instance by name.
     *
     * @param  string|null  $name
     * @return \MuCTS\Contracts\Mail\Mailer
     */
    public function mailer($name = null);
}
