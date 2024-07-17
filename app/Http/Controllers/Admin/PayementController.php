<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Evenement;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayementController extends Controller
{

    public function inscriptionList(){
        $inscriptions = DB::table('inscriptions')
        ->join('events', 'inscriptions.event_id', '=', 'events.id')
        ->select('inscriptions.*', 'events.name as event_name')
        ->latest()
        ->get();
        return view('admin.payement.inscription', compact('inscriptions'));
    }

    public function validateInscription($id){
        $payement = Inscription::findOrFail($id);
        $payement->is_validate = 'true';

        $payement->save();

        return redirect()->route('payement.inscription');
    }

    public function validateInscriptionReset($id){
        $payement = Inscription::findOrFail($id);
        $payement->is_validate = 'false';

        $payement->save();

        return redirect()->route('payement.inscription');
    }


    public function searchInscription(Request $request)
    {
        $ref = $request->input('ref');

        $inscriptions = Inscription::query();

        if ($ref) {
            $inscriptions->where('ref', 'LIKE', "%$ref%");
        }

        $inscriptions = $inscriptions->get();

        return view('admin.payement.inscription', compact('inscriptions'));
    }









    public function formationList(){
        $formations = DB::table('payments')
        ->join('events', 'payments.event_id', '=', 'events.id')
        ->select('payments.*', 'events.name as event_name')
        ->latest()
        ->get();
        return view('admin.payement.formation', compact('formations'));
    }

    public function validateFormation($id){
        $formation = Payment::findOrFail($id);
        $formation->is_validate = 1;

        $formation->save();

        return redirect()->route('payement.formation');
    }

    public function validateFormationReset($id){
        $formation = Payment::findOrFail($id);
        $formation->is_validate = 0;

        $formation->save();

        return redirect()->route('payement.formation');
    }


    public function searchFormation(Request $request)
    {
        $ref = $request->input('ref');

        $formations = Payment::query();

        if ($ref) {
            $formations->where('ref', 'LIKE', "%$ref%");
        }

        $formations = $formations->get();

        return view('admin.payement.formation', compact('formations'));
    }


}
