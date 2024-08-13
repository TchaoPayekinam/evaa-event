<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class SendConfirmedPaymentNotification extends Notification implements ShouldQueue
{
    use Queueable;


    protected $user_email;
    protected $payement_detail_id;

    public function __construct($user_email, $payement_detail_id)
    {
        $this->user_email = $user_email;
        $this->payement_detail_id = $payement_detail_id;
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
        $inscription = DB::table('inscriptions')
            ->join('events', 'inscriptions.event_id', '=', 'events.id')
            ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
            ->join('payment_details', 'payment_details.payment_id', '=', 'payments.id')
            ->where('payment_details.id', $this->payement_detail_id)
            ->select('inscriptions.*', 'events.name as event_name', 'payments.amount', 'payments.method', 'payments.type')
            ->first();

        return (new MailMessage)
        ->subject('Validation de paiement')
        ->view('mails.confirmed_payment', ['inscription' => $inscription,]);
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
            'message' => 'The introduction to the notification for database.',
        ];
    }
}
