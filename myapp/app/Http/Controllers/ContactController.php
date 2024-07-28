<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Newslettersuscriber;
use App\Models\Contact;

use App\Jobs\SendNewslettersuscriberNotificationEmail;
use App\Jobs\SendContactFormNotificationEmail;

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

            SendContactFormNotificationEmail::dispatch($contact->id);

            return response()->json(['success' => 'Votre message a été soumis avec succès !']);
            
        } catch(Exception $e) {
            //return redirect()->back()->withErrors($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function subscribe_to_newsletter(Request $request) {
        $check_if_exist = Newslettersuscriber::where('email', $request->email)->first();

        if (is_null($check_if_exist)) {
            // Générer un token unique
            $token = Str::random(60);

            $newSucriber = new Newslettersuscriber;
            $newSucriber->email = $request->email;
            $newSucriber->token = $token;
            $newSucriber->save();

            SendNewslettersuscriberNotificationEmail::dispatch($newSucriber->email, $token);

            $notification = array(
                'message' => __('newsletter.success'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        $notification = array(
            'message' => __('newsletter.failed'),
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }
}