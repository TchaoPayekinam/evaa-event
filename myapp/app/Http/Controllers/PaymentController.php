<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private function generateConfirmationCode()
    {
        $datePart = date('Ym');
        $randomPart = uniqid('', true);
        $confirmationCode = $datePart . '-' . strtoupper(substr($randomPart, 0, 14));

        return $confirmationCode;
    }

    public function payment(){
        return view("front.event.payment");
    }

    public function submit(Request $request)
    {
        if(!Auth::check()){

            return redirect()->route("user.login");
        }
        $event = Event::find(1);
        $request->validate([
            'payment_option' => 'required|string',
        ]);

        $confirmationCode = $this->generateConfirmationCode();
        $payment = new Payment();
        $payment->user_id = auth()->id();
        $payment->event_id = $event->id;
        $payment->paymentAmount = $event->frais_formation;
        $payment->paymentOption = $request->payment_option;
        $payment->confirmationCode = $confirmationCode;
        $saved = $payment->save();

        try {
            if ($saved) {
                if ($payment->paymentOption === 'Flooz') {
                    return redirect()->route('payment.flooz')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount]);
                } else if ($payment->paymentOption === 'T-Money') {
                    return redirect()->route('payment.tMoney')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount]);
                }else if( $payment->paymentOption === 'Western Union') {
                    return redirect()->route('payment.westernUnion')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount]);
                }else if( $payment->paymentOption === 'Money Gram') {
                    return redirect()->route('payment.moneyGram')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount]);
                }else if($payment->paymentOption === 'Cash'){
                    return redirect()->route('payment.cash')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount]);
                }
            }

        } catch (Exception $e) {
           return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
