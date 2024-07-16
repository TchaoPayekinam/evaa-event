<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Payment;
use App\Notifications\ConfirmInscriptionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return redirect()->route("user.login");
        }

        $inscriptions = Inscription::where('user_id', auth()->id())->get();
        $payments = Payment::where('user_id', auth()->id())->get();
        return view("front.dashboard.index",compact("inscriptions", "payments"));
    }

    public function inscriptionDetails($id)
    {
        if(!Auth::check()){
            return redirect()->route("user.login");
        }
        $inscription = Inscription::findOrFail($id);
        return view('front.dashboard.inscription_details', compact('inscription'));
    }

    public function confirmInscription($id, Request $request)
    {
        if(!Auth::check()){

            return redirect()->route("user.login");
        }
        $request->validate(
            [
            'confirmationCode' => 'required|string',
            'ref' => 'required|string|min:10',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today'
            ],
            [
                'ref.string'=>'La reférence est une chaine de caractère nécessite',
                'ref.required'=> 'La reférence est est obligatoire',
                'confirmationCode.required'=> 'Le code de confirmation est est obligatoire',
                'ref.min'=> 'La taille minimale de la reférence est 10 caractères',
                'date' => 'la date est obligatoire',
                'date.date_format' => 'Format de la date est incorrecte',
                'date.after_or_equal' => 'la date est incorrecte'
            ]
        );
        $inscription = Inscription::findOrFail($id);
        $user = Auth::user();

        if($request->confirmationCode != $inscription->confirmationCode){
            return redirect()->back()->withErrors(['confirmationCode' => 'Aucune inscription ne correspond à votre code de confirmation.']);
        }
        $inscription->ref = $request->ref;
        $inscription->status = 'confirmed';
        $inscription->save();

        $user->notify(new ConfirmInscriptionNotification($inscription->lastName, $inscription->firstName, $inscription->confirmationCode));
        return redirect()->route('dashboard')->with('success', 'Inscription confirmée avec succès.');
    }
    public function paymentDetails($id)
    {
        if(!Auth::check()){
            return redirect()->route("user.login");
        }
        $payment = Payment::findOrFail($id);
        return view('front.dashboard.payment_details', compact('payment'));
    }

    public function confirmPayment($id, Request $request)
    {
        if(!Auth::check()){

            return redirect()->route("user.login");
        }
        $request->validate(
            [
            'confirmationCode' => 'required|string',
            'ref' => 'required|string|min:10',
            'date' => 'required|date|date_format:Y-m-d|after_or_equal:today'
            ],
            [
                'ref.string'=>'La reférence est une chaine de caractère nécessite',
                'ref.required'=> 'La reférence est est obligatoire',
                'confirmationCode.required'=> 'Le code de confirmation est est obligatoire',
                'ref.min'=> 'La taille minimale de la reférence est 10 caractères',
                'date' => 'la date est obligatoire',
                'date.date_format' => 'Format de la date est incorrecte',
                'date.after_or_equal' => 'la date est incorrecte'
            ]
        );
        $payment = Payment::findOrFail($id);
        $user = Auth::user();

        if($request->confirmationCode != $payment->confirmationCode){
            return redirect()->back()->withErrors(['confirmationCode' => 'Aucun payment ne correspond à votre code de confirmation.']);
        }
        $payment->ref = $request->ref;
        $payment->status = 'confirmed';
        $payment->save();

        $user->notify(new ConfirmInscriptionNotification($payment->lastName, $payment->firstName, $payment->confirmationCode));
        return redirect()->route('dashboard')->with('success', 'Payment confirmée avec succès.');
    }
}
