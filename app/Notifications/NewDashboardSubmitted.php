<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDashboardSubmitted extends Notification
{
    use Queueable;

    protected $email;
    protected $item;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $item)
    {
        $this->email = $email;
        $this->item = $item;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New System or Dashboard submitted')
            ->line('A new system or dashboard has been submitted, pending approval')
            ->line('Dashboard name: ' . $this->item->title)
            ->line('Dashboard description: ' . $this->item->description)
            ->line('Dashboard Link: ' . $this->item->url_link);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
