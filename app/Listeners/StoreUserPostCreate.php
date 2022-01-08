<?php

namespace App\Listeners;

use App\Events\PostsCreated;
use App\Models\Stats;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreUserPostCreate
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
     * @param  \App\Events\PostsCreated  $event
     * @return void
     */
    public function handle(PostsCreated $event)
    {
        Stats::updateOrCreate(['user_id' => $event->user->id], ['exp' => isset($event->user->stats->exp) ? $event->user->stats->exp + 10 : 10,
            'posts' => isset($event->user->stats->posts) ?$event->user->stats->posts + 1 : 1]);
        $event->user->stats->exp = $event->user->stats->exp + 10;
        toast('Pomyślnie stworzono post! <br>Twój EXP wzrasta do: '. $event->user->stats->exp,'success');
    }
}
