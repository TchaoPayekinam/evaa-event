<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewNewslettersuscriberNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Valider votre inscription à la newsletter')
            ->view('mails.new_newslettersuscriber')
            ->with([
                'token' => $this->token               
            ]);
    }
}