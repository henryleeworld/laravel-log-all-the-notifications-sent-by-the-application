<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class FailedLogin extends Notification implements ShouldQueue
{
    use Queueable;

    public array $log;

    public function __construct(array $log)
    {
        $this->log = $log;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject(__('There has been a failed login attempt to your :app account.', ['app' => config('app.name')]))
            ->markdown('emails.failed', [
                'account' => $notifiable,
                'time' => $this->log['login_at'],
                'ipAddress' => $this->log['ip_address'],
                'browser' => $this->log['user_agent'],
            ]);
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage())
            ->from(config('app.name'))
            ->warning()
            ->content(__('There has been a failed login attempt to your :app account.', ['app' => config('app.name')]))
            ->attachment(function ($attachment) use ($notifiable) {
                $attachment->fields([
                    __('Account') => $notifiable->email,
                    __('Time') => $this->log['login_at']->toCookieString(),
                    __('IP Address') => $this->log['ip_address'],
                    __('Browser') => $this->log['user_agent'],
                ]);
            });
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())
            ->content(__('There has been a failed login attempt to your :app account.', ['app' => config('app.name')]));
    }
}
