<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\ConfirmedPaymentNotification;
use Illuminate\Support\Facades\Mail;

class SendConfirmedPaymentNotificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user_email;
    protected $payement_detail_id;

    public function __construct($user_email, $payement_detail_id)
    {
        $this->user_email = $user_email;
        $this->payement_detail_id = $payement_detail_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user_email)->send(new ConfirmedPaymentNotification($this->payement_detail_id));   
    }
}
