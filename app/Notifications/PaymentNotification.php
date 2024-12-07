<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentNotification extends Notification
{
    use Queueable;
        public $subscription;


    /**
     * Create a new notification instance.
     */
    public function __construct($subscription)
    {
                $this->subscription = $subscription;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
public function toMail(object $notifiable): MailMessage
{
    return (new MailMessage)
       ->subject('Your Gym Subscription Details')
            ->greeting('Hello ' . $this->subscription->name . ',')
            ->line('Thank you for subscribing to our gym services.')
            ->line('Here are the details of your subscription:')
            ->line('Preferred Coach: ' . $this->subscription->coachprefer)
            ->line('Training Sessions: ' . $this->subscription->sessiontrain)
            ->line('Payment Method: ' . $this->subscription->paymentmethod)
            ->line('We are excited to help you achieve your fitness goals!')
            ->salutation('Best regards, The Gym Team');
}

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}