<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmedPaymentNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Payment;
use App\Models\Payment_detail;
use App\Models\Inscription;


class PaymentController extends Controller
{
    /* public function index(){
        $payements = DB::table('payements')
            ->join('evenements', 'payements.evenement_id', '=', 'evenements.id')
            ->select('payements.*', 'evenements.libelle as evenement_libelle')
            ->latest()
            ->get();

        return view('admin.payement.index', compact('payements'));
    } */

    public function transactions() {
        $transactions = Payment_detail::where('status', 'not_confirmed')
                                        ->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    public function confirm_transaction($id) {
        $payment_detail = Payment_detail::find($id);
        $payment_detail->status = 'confirmed';
        $payment_detail->save();

        $payment = Payment::find($payment_detail->payment_id);
        $payment->status = 'confirmed';
        $payment->save();

        $inscription = Inscription::find($payment->inscription_id);
         if($inscription->status == 'pending') {
             $inscription->status = 'registration_fees_paid';
         }
         else {
             $inscription->status = 'completed';
         }


        $inscription->save();

        $user = DB::table('users')->join('inscriptions', 'inscriptions.user_id', '=', 'users.id')
                ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
                ->join('payment_details', 'payment_details.payment_id', '=', 'payments.id')
                ->where('payment_details.id', $id)
                ->select('users.email')
                ->first();

        //SendConfirmedPaymentNotificationEmail::dispatch($user->email, $id);

       // $user = auth()->user();

        Mail::to($user->email)->send(new ConfirmedPaymentNotification($id));

        $notification = array(
            'message' => 'Confirmation effectuée avec succès',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
