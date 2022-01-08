<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

//////////////////////////////////////////
use App\Events\PostsCreated;
use App\Listeners\StoreUserPostCreate;
use App\Events\LoginHistory;
use App\Listeners\StoreUserLoginHistory;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PostsCreated::class=>[
          StoreUserPostCreate::class,
        ],
        LoginHistory::class=>[
            StoreUserLoginHistory::class,
        ],
        'Illuminate\Auth\Events\Login' => ['App\Listeners\LoginSuccessful'],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
