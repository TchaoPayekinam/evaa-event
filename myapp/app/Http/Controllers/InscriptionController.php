<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Inscription;
use App\Models\User;
use App\Notifications\InscriptionNotification;
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
                'password' => ['required', Rules\Password::defaults()],

            ],[
                'email.exists'=> 'Aucun compte n\'est associé à cette adresse email.',
                'email.required'=> 'Le champ email est obligatoire',
                'email.email'=> 'Adresse email incorrecte',
                'password.min'=>'La taille minimale du mot de passe est 8',
                'password.mixedCase'=>'Le mot de passe nécessite au moins une lettre majuscule et une lettre minuscule',
                'password.letters'=>'Le mot de passe nécessite au moins une lettre',
                'password.numbers'=>'Le mot de passe nécessite au moins un chiffre',
                'password.symbols'=>'Le mot de passe nécessite au moins un symbole',
                'password.required'=> 'Le mot de passe est obligatoire',
            ]);


            if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])){
                $user = User::where('email', $validatedData['email'])->first();
                Auth::login($user);
            }


            $request->validate([
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'gender' => 'required|string',
                'phoneNumber' => 'required|string',
                'country' => 'required|string',
                'city' => 'required|string',
                'cohortJoin' => 'required|string',
                'experienceDesign' => 'required|string',
                'paymentOption' => 'required|string',
            ], [
                'lastName.required' => 'Le nom est obligatoire',
                'firstName.required' => 'Le prénom est obligatoire',
                'phoneNumber.required' => 'Le numéro de téléphone est obligatoire',
                'country.required' => 'Le pays de résidence est obligatoire',
                'city.required' => 'La ville de résidence est obligatoire',
                'gender.required' => 'Le genre est obligatoire',
                'cohortJoin.required' => 'Le choix du cohorte est obligatoire',
                'experienceDesign.required' => 'La réponse est obligatoire',
                'paymentOption.required' => 'Le choix de l\'option de paiement est obligatoire',
            ]);



            $confirmationCode = $this->generateConfirmationCode();
            $inscription = new Inscription();
            $inscription->gender = $request->gender;
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
                'password_no_account' => ['required', 'confirmed', Rules\Password::defaults()],
            ], [
                'email_no_account.required'=> 'L\'email est obligatoire',
                'email_no_account.email'=> 'Adresse email incorrecte',
                'email_no_account.unique' => 'Un compte avec cette adresse e-mail existe déjà.',
                'password_no_account.confirmed'=>'Le mot de passe de confirmation est incorrect',
                'password_no_account.min'=>'La taille minimale du mot de passe est 8',
                'password_no_account.mixedCase'=>'Le mot de passe nécessite au moins une lettre majuscule et une lettre minuscule',
                'password_no_account.letters'=>'Le mot de passe nécessite au moins une lettre',
                'password_no_account.numbers'=>'Le mot de passe nécessite au moins un chiffre',
                'password_no_account.symbols'=>'Le mot de passe nécessite au moins un symbole',
                'password_no_account.required'=> 'Le mot de passe est obligatoire',
            ]);

            $validated = $request->validate([
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'gender' => 'required|string',
                'phoneNumber' => 'required|string',
                'country' => 'required|string',
                'city' => 'required|string',
                'cohortJoin' => 'required|string',
                'experienceDesign' => 'required|string',
                'paymentOption' => 'required|string',
            ], [
                'lastName.required' => 'Le nom est obligatoire',
                'firstName.required' => 'Le prénom est obligatoire',
                'phoneNumber.required' => 'Le numéro de téléphone est obligatoire',
                'country.required' => 'Le pays de résidence est obligatoire',
                'city.required' => 'La ville de résidence est obligatoire',
                'gender.required' => 'Le genre est obligatoire',
                'cohortJoin.required' => 'Le choix du cohorte est obligatoire',
                'experienceDesign.required' => 'La réponse est obligatoire',
                'paymentOption.required' => 'Le choix de l\'option de paiement est obligatoire',
            ]);
            $user = User::where('email', $validatedData['email_no_account'])->first();
            if ($user) {
                return redirect()->back()->withErrors(['email_no_account' => 'Un compte avec cette adresse e-mail existe déjà.']);
            }

            $user = new User();
            $user->email = $validatedData['email_no_account'];
            $user->firstName = $validated['firstName'];
            $user->lastName = $validated['lastName'];
            $user->password = Hash::make($validatedData['password_no_account']);
            $user->save();

            Auth::login($user);

           $confirmationCode = $this->generateConfirmationCode();
           $inscription = new Inscription();
           $inscription->gender = $request->gender;
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


            $user->notify(new InscriptionNotification($inscription->lastName, $inscription->firstName, $inscription->confirmationCode, $inscription->id));

             if ($saved) {


                 switch ($request->paymentOption) {
                     case 'Cash':
                         return redirect()->route('inscription.cash')->with(['confirmationCode'=> $inscription->confirmationCode,     'paymentAmount' => $inscription->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                     case 'T-Money':
                        return redirect()->route('inscription.tMoney')->with(['confirmationCode'=> $inscription->confirmationCode, ' paymentAmount' => $inscription->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                     case 'Western Union':
                        return redirect()->route('inscription.westernUnion')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                     case 'Flooz':
                            return redirect()->route('inscription.flooz')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                     case 'Money Gram':
                        return redirect()->route('inscription.moneyGram')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $inscription->paymentAmount, 'success' => 'Inscription réussie ! Nous avons envoyé un email à votre adresse : '.$user->email]);
                     default:
                        return abort(404);
                 }
            }

         } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
         }
    }

}
