<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\NewContactPostNotification;
use Illuminate\Support\Facades\Mail;

class SendContactFormNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact_id;

    public function __construct($contact_id)
    {
        $this->contact_id = $contact_id;
    }
    
    public function handle()
    {
        Mail::to('tpayekinam@gmail.com')->send(new NewContactPostNotification($this->contact_id));
        //Mail::to('evaa.event@gmail.com')->send(new NewContactPostNotification($this->contact_id));
    }
}
