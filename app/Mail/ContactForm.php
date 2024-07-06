<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $firstName;
    public $lastName;
    public $message;
    public $phoneNumber;
    public $society;
    public $email;

    public function __construct($firstName, $lastName, $message, $phoneNumber, $society, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->message = $message;
        $this->phoneNumber = $phoneNumber;
        $this->society = $society;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact')
        ->with([
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'phoneNumber' => $this->phoneNumber,
            'society' => $this->society,
            'msg' => $this->message,
        ]);
    }
}
