<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\DB;

class ConfirmedPaymentNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $payement_detail_id;

    public function __construct($payement_detail_id)
    {
        $this->payement_detail_id = $payement_detail_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $inscription = DB::table('inscriptions')
                ->join('events','inscriptions.event_id','=','events.id')
                ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
                ->join('payment_details', 'payment_details.payment_id', '=', 'payments.id')
                ->where('payment_details.id', $this->payement_detail_id)
                ->select('inscriptions.*', 'events.name as event_name', 'payments.amount', 'payments.method', 'payments.type')
                ->first();

        return $this->subject('Validation de paiement')
            ->view('mails.confirmed_payment')
            ->with([
                'inscription' => $inscription,          
            ]);
    }
}