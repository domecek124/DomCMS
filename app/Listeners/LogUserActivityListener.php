<?php

namespace App\Listeners;

use App\Events\UserActivityEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\UserActivity;

class LogUserActivityListener
{
    public function handle(UserActivityEvent $event)
    {
        // Log user activity
        $activity = new UserActivity();
        $activity->user_id = $event->userId;
        $activity->message = $event->message;
        $activity->save();
    }
}
