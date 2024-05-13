<?php

namespace App\Listeners;

use App\Events\UserStatusChanged;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Sanctum\Guard;
use Illuminate\Support\Facades\Auth;


class UserStatusChangedListener
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  UserStatusChanged  $event
     * @return void
     */
    public function handle(UserStatusChanged $event)
    {
        $user = User::find($event->userID);

        if ($user && $user->userStatus->id !== 1) {
            Auth::logout();
        }
    }
}
