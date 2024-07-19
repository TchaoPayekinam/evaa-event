<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmPaymentNotification extends Notification
{
    use Queueable;

    private $lastName;
   private $firstName;
   private $confirmationCode;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($lastName, $firstName, $confirmationCode)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->confirmationCode = $confirmationCode;
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
        ->markdown('vendor.notifications.inscriptions.confirm', [
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'confirmationCode'=> $this->confirmationCode,
            'actionText' => 'Confirmer l\'inscription',
            'actionUrl' =>   route('payment'),
            'displayableActionUrl' =>  route('payment')
        ]);
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