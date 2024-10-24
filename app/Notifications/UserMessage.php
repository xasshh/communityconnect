<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class UserMessage extends Notification
{
    use Queueable;

    protected $message;
    protected $sender;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message, $sender)
    {
        $this->message = $message;
        $this->sender = $sender;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast']; // You can also add 'mail' or 'sms' (e.g., Twilio) here.
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
 

    /**
     * Get the broadcast representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => $this->message,
            'sender_id' => $this->sender->id,
            'sender_name' => $this->sender->name,
        ]);
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
                    ->line('You have received a message from ' . $this->sender->name)
                    ->line($this->message)
                    ->action('View Message', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
{
    return [
        'message' => $this->message,
        'sender_id' => $this->sender->id,
        'sender_name' => $this->sender->name,
        // 'parent_id' => $this->message->parent_id, // If it's a reply
    ];
}

}
