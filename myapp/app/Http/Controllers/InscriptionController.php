<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Exception;
use Illuminate\Http\Request;

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
        return view('front.inscription');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|min:5',
            'lastName' => 'required|string|min:5',
            'genre' => 'nullable',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'phoneNumber' => ['required', 'min:8'],
            'country' => 'required|string',
            'city' => 'required|string',
            'cohortJoin' => 'required|string',
            'experienceDesign' => 'required|string',
            'paymentOption' => 'required|string',
        ]);

        $confirmationCode = $this->generateConfirmationCode();
        $paymentAmount = 5000;

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
        $inscription->paymentAmount = $paymentAmount;
        $inscription->confirmationCode = $confirmationCode;


        $saved = $inscription->save();

        try {
            if ($saved) {
                if ($request->paymentOption === 'Flooz') {
                    return redirect()->route('flooz')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $paymentAmount]);
                } else if ($request->paymentOption === 'T-Money') {
                    return redirect()->route('tMoney')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $paymentAmount]);
                }else if( $request->paymentOption === 'Western Union') {
                    return redirect()->route('westernUnion')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $paymentAmount]);
                }else if( $request->paymentOption === 'Money Gram') {
                    return redirect()->route('moneyGram')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $paymentAmount]);
                }else if($request->paymentOption === 'Cash'){
                    return redirect()->route('cash')->with(['confirmationCode'=> $inscription->confirmationCode, 'paymentAmount' => $paymentAmount]);
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
