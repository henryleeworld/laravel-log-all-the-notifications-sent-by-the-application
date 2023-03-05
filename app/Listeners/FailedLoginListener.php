<?php

namespace App\Listeners;

use App\Notifications\FailedLogin;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;

class FailedLoginListener
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle($event): void
    {
        if ($event->user) {
            $log = [
                'ip_address' => $ip = $this->request->ip(),
                'user_agent' => $this->request->userAgent(),
                'login_at' => now(),
                'login_successful' => false,
            ];

            $failedLogin = FailedLogin::class;
            $event->user->notify(new $failedLogin($log));
        }
    }
}
