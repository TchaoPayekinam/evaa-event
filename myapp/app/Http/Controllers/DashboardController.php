<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Payment;
use App\Notifications\ConfirmInscriptionNotification;
use App\Notifications\ConfirmPaymentNotification;
use Exception;
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

        switch ($inscription->paymentOption) {
             case 'Cash':
                return view('front.dashboard.inscriptions.cash_details', compact('inscription'));
             case 'T-Money':
                return view('front.dashboard.inscriptions.tmoney_details', compact('inscription'));
             case 'Western Union':
                return view('front.dashboard.inscriptions.westernUnion_details', compact('inscription'));
             case 'Flooz':
                return view('front.dashboard.inscriptions.flooz_details', compact('inscription'));
             case 'Money Gram':
                return view('front.dashboard.inscriptions.moneyGram_details', compact('inscription'));
             default:
             return redirect()->withErrors(['erreur' => 'Page introuvable']);
         }
    }

    public function confirmInscription($id, Request $request)
{
    if (!Auth::check()) {
        return redirect()->route("user.login");
    }

    $inscription = Inscription::findOrFail($id);

    $request->validate(
        [
            'confirmationCode' => 'required|string|min:21|max:21',
            'date' => 'required|date|date_format:Y-m-d|before_or_equal:today',
            'amount' => 'required|numeric'
        ],
        [
            'confirmationCode.required' => 'Le code de confirmation est obligatoire',
            'confirmationCode.min' => 'La taille minimale du code de confirmation est de 21 caractères avec le trait d\'union',
            'confirmationCode.max' => 'La taille maximale du code de confirmation est de 21 caractères avec le trait d\'union',
            'confirmationCode.string' => 'Le code de confirmation est une chaîne de caractère avec un trait d\'union',
            'date.required' => 'La date est obligatoire',
            'date.date_format' => 'Le format de la date est incorrect',
            'date.before_or_equal' => 'La date doit être aujourd\'hui ou après',
            'amount.required'=> 'Le montant envoyé sans la devise est obligatoire',
            'amount.numeric'=> 'Le montant envoyé sans la devise doit comporter uniquement des chiffres'
        ]
    );

    if ($request->confirmationCode != $inscription->confirmationCode ) {
        return redirect()->back()->withErrors(['confirmationCode' => 'Aucune inscription ne correspond à votre code de confirmation.']);
    }

    if( $request->amount != $inscription->paymentAmount) {
        return redirect()->back()->withErrors(['paymentAmount' => 'Frais d\'inscription est à 5000 fcfa']);
    }
    try {

        switch ($inscription->paymentOption) {
            case 'T-Money':
                $request->validate(
                    ['ref_tmoney' => 'required|string|min:15|max:15'],
                    [
                        'ref_tmoney.string' => 'La référence doit être une chaîne de caractères qui commence par (Txn : ID)',
                        'ref_tmoney.required' => 'La référence est obligatoire',
                       'ref_tmoney.min' => 'La taille minimale de la référence est de 21 caractères avec les deux points et l\'espace',
                        'ref_tmoney.max' => 'La taille maximale de la référence est de 21 caractères avec les deux points et l\'espace',
                    ]
                );
                $inscription->ref_tmoney = $request->ref_tmoney;
                break;

            case 'Western Union':
                $request->validate(
                    ['tracking_number' => 'required'],
                    [
                        'tracking_number.required' => 'La référence est obligatoire',
                    ]
                );
                $inscription->tracking_number = $request->tracking_number;
                break;

            case 'Flooz':

                $request->validate(
                    ['ref_flooz' => 'required|string|min:21|max:21'],
                    [
                        'ref_flooz.string' => 'La référence doit être une chaîne de caractères qui commence par (Txn: ID)',
                        'ref_flooz.required' => 'La référence est obligatoire',
                        'ref_flooz.min' => 'La taille minimale de la référence est de 21 caractères avec les deux points et l\'espace',
                        'ref_flooz.max' => 'La taille maximale de la référence est de 21 caractères avec les deux points et l\'espace',
                    ]
                );
                $inscription->ref_flooz = $request->ref_flooz;

                break;

            case 'Money Gram':
                $request->validate(
                    ['auth_number' => 'required'],
                    [
                        'auth_number.required' => 'La référence est obligatoire',
                    ]
                );
                $inscription->auth_number = $request->auth_number;
                break;

            default:
                return redirect()->withErrors(['erreur' => 'Page introuvable']);
        }

        $inscription->status = 'confirmed';
        $inscription->save();

    } catch (Exception $e) {
        return redirect()->back()->withErrors(['Erreur' => $e->getMessage()]);
    }

    $user = Auth::user();
    $user->notify(new ConfirmInscriptionNotification($inscription->lastName, $inscription->firstName, $inscription->confirmationCode));

    return redirect()->back()->with('success', 'Inscription confirmée avec succès. Un email a été envoyé à votre adresse : '.$user->email);
}
    public function paymentDetails($id)
    {
        if(!Auth::check()){
            return redirect()->route("user.login");
        }
        $payment = Payment::findOrFail($id);

        switch ($payment->paymentOption) {
             case 'Cash':
                return view('front.dashboard.inscriptions.cash_details', compact('payment'));
             case 'T-Money':
                return view('front.dashboard.inscriptions.tmoney_details', compact('payment'));
             case 'Western Union':
                return view('front.dashboard.inscriptions.westernUnion_details', compact('payment'));
             case 'Flooz':
                return view('front.dashboard.payments.flooz_details', compact('payment'));
             case 'Money Gram':
                return view('front.dashboard.inscriptions.moneyGram_details', compact('payment'));
             default:
             return redirect()->withErrors(['erreur' => 'Page introuvable']);
         }
    }

    public function confirmInPayment($id, Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("user.login");
        }

        $payment = Payment::findOrFail($id);

        $request->validate(
            [
                'confirmationCode' => 'required|string|min:21|max:21',
                'date' => 'required|date|date_format:Y-m-d|before_or_equal:today',
                'amount' => 'required|numeric'
            ],
            [
                'confirmationCode.required' => 'Le code de confirmation est obligatoire',
                'confirmationCode.min' => 'La taille minimale du code de confirmation est de 21 caractères avec le trait d\'union',
                'confirmationCode.max' => 'La taille maximale du code de confirmation est de 21 caractères avec le trait d\'union',
                'confirmationCode.string' => 'Le code de confirmation est une chaîne de caractère avec un trait d\'union',
                'date.required' => 'La date est obligatoire',
                'date.date_format' => 'Le format de la date est incorrect',
                'date.before_or_equal' => 'La date doit être aujourd\'hui ou après',
                'amount.required'=> 'Le montant envoyé sans la devise est obligatoire',
                'amount.numeric'=> 'Le montant envoyé sans la devise doit comporter uniquement des chiffres'
            ]
        );

        if ($request->confirmationCode != $payment->confirmationCode ) {
            return redirect()->back()->withErrors(['confirmationCode' => 'Aucun paiement ne correspond à votre code de confirmation.']);
        }

        if( $request->amount != $payment->paymentAmount) {
            return redirect()->back()->withErrors(['paymentAmount' => 'Frais de formation est à 45000 fcfa']);
        }
        try {

            switch ($payment->paymentOption) {
                case 'T-Money':
                    $request->validate(
                        ['ref_tmoney' => 'required|string|min:15|max:15'],
                        [
                            'ref_tmoney.string' => 'La référence doit être une chaîne de caractères qui commence par (Txn : ID)',
                            'ref_tmoney.required' => 'La référence est obligatoire',
                           'ref_tmoney.min' => 'La taille minimale de la référence est de 21 caractères avec les deux points et l\'espace',
                            'ref_tmoney.max' => 'La taille maximale de la référence est de 21 caractères avec les deux points et l\'espace',
                        ]
                    );
                    $payment->ref_tmoney = $request->ref_tmoney;
                    break;

                case 'Western Union':
                    $request->validate(
                        ['tracking_number' => 'required'],
                        [
                            'tracking_number.required' => 'La référence est obligatoire',
                        ]
                    );
                    $payment->tracking_number = $request->tracking_number;
                    break;

                case 'Flooz':

                    $request->validate(
                        ['ref_flooz' => 'required|string|min:21|max:21'],
                        [
                            'ref_flooz.string' => 'La référence doit être une chaîne de caractères qui commence par (Txn: ID)',
                            'ref_flooz.required' => 'La référence est obligatoire',
                            'ref_flooz.min' => 'La taille minimale de la référence est de 21 caractères avec les deux points et l\'espace',
                            'ref_flooz.max' => 'La taille maximale de la référence est de 21 caractères avec les deux points et l\'espace',
                        ]
                    );
                    $payment->ref_flooz = $request->ref_flooz;

                    break;

                case 'Money Gram':
                    $request->validate(
                        ['auth_number' => 'required'],
                        [
                            'auth_number.required' => 'La référence est obligatoire',
                        ]
                    );
                    $payment->auth_number = $request->auth_number;
                    break;

                default:
                    return redirect()->withErrors(['erreur' => 'Page introuvable']);
            }

            $payment->status = 'confirmed';
            $payment->save();

        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Erreur' => $e->getMessage()]);
        }

        $user = Auth::user();
        //$user->notify(new ConfirmPaymentNotification($payment->lastName, $payment->firstName, $payment->confirmationCode));

        return redirect()->back()->with('success', 'Paiment confirmée avec succès. Un email a été envoyé à votre adresse : '.$user->email);
    }
}
