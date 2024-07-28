<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Payment;
use App\Models\Inscription;
use App\Notifications\PaymentNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function trainingCostsPayment($inscription_id) {
        $check_payment = Payment::where('inscription_id', $inscription_id)
                    ->where('type', 'training_costs')
                    ->first();
        if(!is_null($check_payment)) {
            $event = Inscription::join('events','inscriptions.event_id','=','events.id')
                    ->where('inscriptions.id', $inscription_id)
                    ->select('events.*', 'inscriptions.confirmationCode')
                    ->first();

            $payment = Payment::where('inscription_id', $inscription_id)->first();

            if ($payment->method === 'Flooz') {
                return view('front.dashboard.payments.flooz_details', compact('event', 'payment'));
            } else if ($payment->method === 'T-Money') {
                return view('front.dashboard.payments.tmoney_details', compact('event', 'payment'));
            } else if( $payment->method === 'Western Union') {
                return view('front.dashboard.payments.westernUnion_details', compact('event', 'payment'));
            } else if( $payment->method === 'Money Gram') {
                return view('front.dashboard.payments.moneyGram_details', compact('event', 'payment'));
            } else if($payment->method === 'Cash'){
                return view('front.dashboard.payments.cash_details', compact('event', 'payment'));
            }
        }

        $inscription = Inscription::where('id', $inscription_id)->first();
        return view("front.event.payment", compact('inscription'));
    }

    public function postTrainingCostsPayment(Request $request, $inscription_id) {
        $check_payment = Payment::where('inscription_id', $inscription_id)
                    ->where('type', 'training_costs')
                    ->first();
        if(!is_null($check_payment)) {
            return redirect()->route('user.payments');
        }

        $event = Inscription::join('events','inscriptions.event_id','=','events.id')
                    ->where('inscriptions.id', $inscription_id)
                    ->select('events.*', 'inscriptions.confirmationCode')
                    ->first();

        $payment = new Payment;
        $payment->inscription_id = $inscription_id;
        $payment->amount = $event->frais_formation;
        $payment->method = $request->payment_option;
        $payment->type = 'training_costs';
        $payment->save();

        if ($payment->method === 'Flooz') {
            return view('front.dashboard.payments.flooz_details', compact('event', 'payment'));
        } else if ($payment->method === 'T-Money') {
            return view('front.dashboard.payments.tmoney_details', compact('event', 'payment'));
        } else if( $payment->method === 'Western Union') {
            return view('front.dashboard.payments.westernUnion_details', compact('event', 'payment'));
        } else if( $payment->method === 'Money Gram') {
            return view('front.dashboard.payments.moneyGram_details', compact('event', 'payment'));
        } else if($payment->method === 'Cash'){
            return view('front.dashboard.payments.cash_details', compact('event', 'payment'));
        }
    }

    private function generateConfirmationCode()
    {
        $datePart = date('Ym');
        $randomPart = uniqid('', true);
        $confirmationCode = $datePart . '-' . strtoupper(substr($randomPart, 0, 14));

        return $confirmationCode;
    }


    public function flooz(){
        return view("front.event.payment.flooz");
    }

    public function tMoney(){
        return view("front.event.payment.tMoney");
    }

    public function westernUnion(){
        return view("front.event.payment.westernUnion");
    }

    public function moneyGram(){
        return view("front.event.payment.moneyGram");
    }

    public function cash(){
        return view("front.event.payment.cash");
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

        $user = auth()->user();
        $user->notify(new PaymentNotification($user->lastName, $user->firstName, $payment->confirmationCode, $payment->id));
        try {
            if ($saved) {
                if ($payment->paymentOption === 'Flooz') {
                    return redirect()->route('payment.flooz')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                } else if ($payment->paymentOption === 'T-Money') {
                    return redirect()->route('payment.tMoney')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                }else if( $payment->paymentOption === 'Western Union') {
                    return redirect()->route('payment.westernUnion')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                }else if( $payment->paymentOption === 'Money Gram') {
                    return redirect()->route('payment.moneyGram')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                }else if($payment->paymentOption === 'Cash'){
                    return redirect()->route('payment.cash')->with(['confirmationCode'=> $payment->confirmationCode, 'paymentAmount' => $payment->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                }
            }

        } catch (Exception $e) {
           return redirect()->back()->withErrors($e->getMessage());
        }
    }
}