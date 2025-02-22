<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Payment;
use App\Models\Payment_detail;
use App\Notifications\ConfirmInscriptionNotification;
use App\Notifications\ConfirmPaymentNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PDF;

class DashboardController extends Controller
{
    public function index() {
        return view("front.dashboard");
    }

    public function registrations() {
        $inscriptions = Inscription::where('user_id', auth()->id())->get();

        return view("front.dashboard.registrations",compact("inscriptions"));
    }

    public function payments() {
        $payments = Payment::join('inscriptions','payments.inscription_id','=','inscriptions.id')
                    ->where('inscriptions.user_id', auth()->id())
                    ->select('payments.*', 'inscriptions.confirmationCode')
                    ->get();
        return view('front.dashboard.payments', compact('payments'));
    }

    public function paymentDetailsSubmissionForm($payment_id) {
        $payment = Payment::join('inscriptions','payments.inscription_id','=','inscriptions.id')
                    ->join('events','inscriptions.event_id','=','events.id')
                    ->where('payments.id', $payment_id)
                    ->select('payments.*',  'inscriptions.confirmationCode', 'events.name as event_name')
                    ->first();
        $payment_detail = Payment_detail::where('payment_id', $payment_id)->first();

        return view('front.dashboard.payments.submissionForm', compact('payment', 'payment_detail'));
    }

    public function postPaymentDetailsSubmissionForm(Request $request, $payment_id) {        
        $payment_detail = Payment_detail::where('payment_id', $payment_id)->first();

        if ($payment_detail) {
            $payment_detail->payment_id = $payment_id;
            if($request->payment_reference_number) {
                $payment_detail->ref_number = $request->payment_reference_number;
            }
            if($request->tracking_number) {
                $payment_detail->tracking_number = $request->tracking_number;
            }
            if($request->auth_number) {
                $payment_detail->auth_number = $request->auth_number;
            }
            $payment_detail->amount = $request->amount_sent;
            $payment_detail->save();

            $notification = array(
                'message' => __('user-payments.payment-details-submit'),
                'alert-type' => 'success'
            );

            return redirect()->route('user.payments')
                ->with($notification);
        }

        if($request->payment_method == 'Flooz' || $request->payment_method == 'T-Money') {
            $payment_detail = new Payment_detail;
            $payment_detail->payment_id = $payment_id;
            $payment_detail->ref_number = $request->payment_reference_number;
            $payment_detail->amount = $request->amount_sent;
            $payment_detail->method = $request->payment_method;
            $payment_detail->save();

            /*$payment_detail = Payment_detail::where('ref_number', $request->payment_reference_number)
                        ->where('amount', $request->amount_sent)
                        ->first();

            if (is_null($payment_detail)) {
                $notification = array(
                    'message' => __('user-payments.incorrect-payment-details'),
                    'alert-type' => 'error'
                );

                return redirect()->back()
                    ->withInput()
                    ->with($notification);
            }*/ 
        }
        elseif ($request->payment_method == 'Western Union') {
            $payment_detail = new Payment_detail;
            $payment_detail->payment_id = $payment_id;
            $payment_detail->tracking_number = $request->tracking_number;
            $payment_detail->amount = $request->amount_sent;
            $payment_detail->method = $request->payment_method;
            $payment_detail->save();

            /*$payment_detail = Payment_detail::where('tracking_number', $request->tracking_number)
                    ->where('amount', $request->amount_sent)
                    ->first();

            if (is_null($payment_detail)) {
                $notification = array(
                    'message' => __('user-payments.incorrect-payment-details'),
                    'alert-type' => 'error'
                );

                return redirect()->back()
                    ->withInput()
                    ->with($notification);
            }*/
        }
        elseif ($request->payment_method == 'Money Gram') {
            $payment_detail = new Payment_detail;
            $payment_detail->payment_id = $payment_id;
            $payment_detail->auth_number = $request->auth_number;
            $payment_detail->amount = $request->amount_sent;
            $payment_detail->method = $request->payment_method;
            $payment_detail->save();

            /*$payment_detail = Payment_detail::where('auth_number', $request->auth_number)
                    ->where('amount', $request->amount_sent)
                    ->first();

            if (is_null($payment_detail)) {
                $notification = array(
                    'message' => __('user-payments.incorrect-payment-details'),
                    'alert-type' => 'error'
                );

                return redirect()->back()
                    ->withInput()
                    ->with($notification);
            }*/
        }

        /*$payment = Payment::find($payment_id);
        $payment->status = 'confirmed';
        $payment->save();*/

        /*$payment_detail->payment_id = $payment_id;
        $payment_detail->status = 'confirmed';
        $payment_detail->save();*/

        /*$inscription = Inscription::where('id', $payment->inscription_id)->first();
        if ($payment->type == 'registration_fees') {
            $inscription->status == 'registration_fees_paid';
        } else {
            $inscription->status == 'completed';
        }
        $inscription->save();*/        

        $notification = array(
            'message' => __('user-payments.payment-details-submit'),
            'alert-type' => 'success'
        );

        return redirect()->route('user.payments')
            ->with($notification);
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

            $inscription->paymentAmount = $request->amount;
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
                return view('front.dashboard.payments.cash_details', compact('payment'));
             case 'T-Money':
                return view('front.dashboard.payments.tmoney_details', compact('payment'));
             case 'Western Union':
                return view('front.dashboard.payments.westernUnion_details', compact('payment'));
             case 'Flooz':
                return view('front.dashboard.payments.flooz_details', compact('payment'));
             case 'Money Gram':
                return view('front.dashboard.payments.moneyGram_details', compact('payment'));
             default:
             return abort(404);
         }
    }

    public function confirmPayment($id, Request $request)
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

            $payment->paymentAmount = $request->amount;
            $payment->status = 'confirmed';
            $payment->save();

        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Erreur' => $e->getMessage()]);
        }

        $user = Auth::user();
        $user->notify(new ConfirmPaymentNotification($user->lastName, $user->firstName, $payment->confirmationCode));

        return redirect()->back()->with('success', 'Paiment confirmée avec succès. Un email a été envoyé à votre adresse : '.$user->email);
    }

    public function generate_receipt($payment_id) {
        $pdf = PDF::loadView('front.event.payment.receipt', compact('payment_id'));

        return $pdf->download('Reçu de paiement.pdf');
    }
}