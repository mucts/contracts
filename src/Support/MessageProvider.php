<?php

namespace MuCTS\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \MuCTS\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
