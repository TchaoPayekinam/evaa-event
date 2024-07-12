<?php

namespace App\Http\Controllers;

//use App\Mail\ContactForm;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|min:5',
            'lastName' => 'required|string|min:5',
            'society' => 'nullable|string',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'phoneNumber' => ['required', 'min:11'],
            'message' => 'required|string'
        ]);

        try{
            $contact = new Contact();
            $contact->first_name = $request->firstName;
            $contact->last_name = $request->lastName;
            $contact->society = $request->society;
            $contact->email = $request->email;
            $contact->phone = $request->phoneNumber;
            $contact->message = $request->message;
            $saved = $contact->save();

            return response()->json(['success' => 'Message envoyé avec succès !']);

            /*if($saved) {
                Mail::to("admin@gmail.com")->send(new ContactForm($contact->firstName, $contact->lastName, $contact->message, $contact->phoneNumber, $contact->society, $contact->email));
            } else {
                return redirect()->route('contact.submit')->with('error', 'Une erreur s\'est produite lors de l\'envoi du message');
            }*/

        } catch(Exception $e) {
            //return redirect()->back()->withErrors($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
