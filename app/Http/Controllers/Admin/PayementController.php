<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayementController extends Controller
{
    public function index(){
        $payements = DB::table('payments')
        ->join('events', 'payments.event_id', '=', 'events.id')
        ->join('users', 'payments.user_id', '=', 'users.id')
        ->join('inscriptions', 'payments.inscription_id', '=', 'inscriptions.id')
        ->select('payments.*', 'events.name as event_name', 'inscriptions.email as email', 'inscriptions.firstName as firstName', 'inscriptions.lastName as lastName')
        ->latest()
        ->get();
        return view('admin.payement.index', compact('payements'));
    }


    public function validatePayment($id){
        $payement = Payment::findOrFail($id);
        $payement->is_validate = '1';

        $payement->save();

        return redirect()->route('payement.index');
    }

    public function validatePaymentReset($id){
        $payement = Payment::findOrFail($id);
        $payement->is_validate = '0';

        $payement->save();

        return redirect()->route('payement.index');
    }
}
