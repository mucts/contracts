<?php

namespace MuCTS\Contracts\Notifications;

interface Factory
{
    /**
     * Get a channel instance by name.
     *
     * @param  string|null  $name
     * @return mixed
     */
    public function channel($name = null);

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
