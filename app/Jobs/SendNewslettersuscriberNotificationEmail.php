<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\NewNewslettersuscriberNotification;
use Illuminate\Support\Facades\Mail;

class SendNewslettersuscriberNotificationEmail implements ShouldQueue
{
    public $tries = 3;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $suscriber_email;
    protected $token;

    public function __construct($suscriber_email, $token) {
        $this->suscriber_email = $suscriber_email;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->suscriber_email)->send(new NewNewslettersuscriberNotification($this->token));
    }
}