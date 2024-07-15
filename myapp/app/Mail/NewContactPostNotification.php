<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Contact;

class NewContactPostNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact_id;  

    public function __construct($contact_id)
    {
        $this->contact_id = $contact_id;
    }

    public function build()
    {
        $contact = Contact::where('id', $this->contact_id)
                        ->select('*')
                        ->first();

        return $this->subject('Nouvelle soumission de formulaire de contact')
            ->view('mails.contact_form_submitted')
            ->with([
                'contact' => $contact,                
            ]);
    }
}
