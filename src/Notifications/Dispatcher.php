<?php

namespace MuCTS\Contracts\Notifications;

interface Dispatcher
{
    /**
     * Send the given notification to the given notifiable entities.
     *
     * @param  \MuCTS\Contracts\Collections\Collection|array|mixed  $notifiables
     * @param  mixed  $notification
     * @return void
     */
    public function send($notifiables, $notification);

    /**
     * Send the given notification immediately.
     *
     * @param  \MuCTS\Contracts\Collections\Collection|array|mixed  $notifiables
     * @param  mixed  $notification
     * @return void
     */
    public function sendNow($notifiables, $notification);
}
