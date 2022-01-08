<?php

namespace App\Listeners;

use App\Events\LoginHistory;
use App\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class StoreUserLoginHistory
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LoginHistory  $event
     * @return void
     */
    public function handle(LoginHistory $event)
    {
         UserLog::insert(
            ['name' => $event->user->name, 'ip_address' => request()->ip()]
        );
    }
}
