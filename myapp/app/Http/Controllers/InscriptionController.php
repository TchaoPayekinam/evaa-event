<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Exception;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('front.inscription');
    }

    public function store(Request $request){
        $request->validate([
            'firstName' => 'required|string|min:5',
            'lastName' => 'required|string|min:5',
            'genre' => 'nullable',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'phoneNumber' => ['required', 'min:11'],
            'country' => 'required|string',
            'city' => 'required|string',
            'cohortJoint' => 'required|string',
            'experienceDesign' => 'required|string',
            'paymentOption' => 'required|string',
        ]);

        try{
            $inscription = new Inscription();
            $inscription->firstName = $request->firstName;
            $inscription->lastName = $request->lastName;
            $inscription->genre = $request->genre;
            $inscription->email = $request->email;
            $inscription->phoneNumber = $request->phoneNumber;
            $inscription->country = $request->country;
            $inscription->city = $request->city;
            $inscription->cohortJoint = $request->cohortJoint;
            $inscription->paymentOption = $request->paymentOption;
            $inscription = $inscription->save();

            /*if($saved) {
                Mail::to("admin@gmail.com")->send(new ContactForm($contact->firstName, $contact->lastName, $contact->message, $contact->phoneNumber, $contact->society, $contact->email));
            } else {
                return redirect()->route('contact.submit')->with('error', 'Une erreur s\'est produite lors de l\'envoi du message');
            }*/

        } catch(Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }
    }
}
