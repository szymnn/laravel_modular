<?php

namespace App\Listeners;

use App\Models\Stats;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginSuccessful
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
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $last = $event->user->last_login;
        $last = date('dmY', strtotime($last));
        $now = date('dmY', time());
        $event->user->update(['last_login' => now()]);
        if ($last != $now) {
            Stats::updateOrCreate(['user_id' => $event->user->id], ['exp' => isset($event->user->stats->exp) ? $event->user->stats->exp + 1 : 1]);
        }
        Alert::success('Zalogowano', 'Zostałeś zalogowany pomyślnie:)');
    }
}
