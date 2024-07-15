<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Inscription;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class InscriptionController extends Controller
{
    private function generateConfirmationCode()
    {
        $datePart = date('Ym');
        $randomPart = uniqid('', true);
        $confirmationCode = $datePart . '-' . strtoupper(substr($randomPart, 0, 14));

        return $confirmationCode;
    }

    public function inscription()
    {
        return view('front.event.registration');
    }

    public function submit(Request $request)
    {

        $event = Event::find(1);
        $validatedData = [];

        if ($request->input('has_account') === 'yes') {
            $validatedData = $request->validate([
                'email' => 'required|email|max:255|exists:users,email',
            ],[
                'email.exists'=> 'Aucun compte n\'est associé à cette adresse email.',
                'email.required'=> 'Le champ email est obligatoire',
                'email.email'=> 'Adresse email incorrecte',
            ]);

            $user = User::where('email', $validatedData['email'])->first();
            Auth::login($user);
            $request->validate([
             'firstName' => 'required|string|min:5',
             'lastName' => 'required|string|min:5',
             'genre' => 'nullable',
             'phoneNumber' => ['required', 'min:8'],
             'country' => 'required|string',
             'city' => 'required|string',
             'cohortJoin' => 'required|string',
             'experienceDesign' => 'required|string',
             'paymentOption' => 'required|string',
        ]);

         $confirmationCode = $this->generateConfirmationCode();
         $inscription = new Inscription();
         $inscription->firstName = $request->firstName;
         $inscription->lastName = $request->lastName;
         $inscription->gender = $request->gender;
         $inscription->email = $request->email;
         $inscription->phoneNumber = $request->phoneNumber;
         $inscription->country = $request->country;
         $inscription->city = $request->city;
         $inscription->cohortJoin = $request->cohortJoin;
         $inscription->experienceDesign = $request->experienceDesign;
         $inscription->paymentOption = $request->paymentOption;
         $inscription->paymentAmount = $event->frais_inscription;
         $inscription->confirmationCode = $confirmationCode;
         $inscription->user_id = Auth::user()->id;
         $inscription->event_id = $event->id;

        $saved = $inscription->save();
        } else {
            $validatedData = $request->validate([
                'email_no_account' => ['required', 'string', 'email', 'max:255',],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ], [
                'email_no_account.required'=> 'L\'email est obligatoire',
                'email_no_account.email'=> 'Adresse email incorrecte',
                'email_no_account.unique' => 'Un compte avec cette adresse e-mail existe déjà.',
                'password.confirmed'=>'Le mot de passe de confirmation est incorrect',
                'password.min'=>'La taille minimale du mot de passe est 8',
                'password.mixedCase'=>'Le mot de passe nécessite au moins une lettre majuscule et une lettre minuscule',
                'password.letters'=>'Le mot de passe nécessite au moins une lettre',
                'password.numbers'=>'Le mot de passe nécessite au moins un chiffre',
                'password.symbols'=>'Le mot de passe nécessite au moins un symbole',
                'password.required'=> 'Le mot de passe est obligatoire',
            ]);

            $user = User::where('email', $validatedData['email_no_account'])->first();
            if ($user) {
                return redirect()->back()->withErrors(['email_no_account' => 'Un compte avec cette adresse e-mail existe déjà.']);
            }

            $user = User::create([
                'email' => $request->email_no_account,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            $request->validate([
                'firstName' => 'required|string|min:5',
                'lastName' => 'required|string|min:5',
                'genre' => 'nullable',
                'phoneNumber' => ['required', 'min:8'],
                'country' => 'required|string',
                'city' => 'required|string',
                'cohortJoin' => 'required|string',
                'experienceDesign' => 'required|string',
                'paymentOption' => 'required|string',
           ]);

           $confirmationCode = $this->generateConfirmationCode();
           $inscription = new Inscription();
           $inscription->firstName = $request->firstName;
           $inscription->lastName = $request->lastName;
           $inscription->gender = $request->gender;
           $inscription->email = $request->email_no_account;
           $inscription->phoneNumber = $request->phoneNumber;
           $inscription->country = $request->country;
           $inscription->city = $request->city;
           $inscription->cohortJoin = $request->cohortJoin;
           $inscription->experienceDesign = $request->experienceDesign;
           $inscription->paymentOption = $request->paymentOption;
           $inscription->paymentAmount = $event->frais_inscription;
           $inscription->confirmationCode = $confirmationCode;
           $inscription->user_id = Auth::user()->id;
           $inscription->event_id = $event->id;

           $saved = $inscription->save();

        }
        try {
            if ($saved) {
                if ($request->paymentOption === 'Flooz') {
                    return redirect()->route('payment.flooz')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount]);
                } else if ($request->paymentOption === 'T-Money') {
                    return redirect()->route('payment.tMoney')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount]);
                }else if( $request->paymentOption === 'Western Union') {
                    return redirect()->route('payment.westernUnion')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount]);
                }else if( $request->paymentOption === 'Money Gram') {
                    return redirect()->route('payment.moneyGram')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount]);
                }else if($request->paymentOption === 'Cash'){
                    return redirect()->route('payment.cash')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount]);
                }
            }
        } catch (Exception $e) {
           return redirect()->back()->withErrors($e->getMessage());
        }
    }
}