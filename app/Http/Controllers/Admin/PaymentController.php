<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Payment_detail;

use App\Jobs\SendConfirmedPaymentNotificationEmail;

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
        // $transactions = Payment_detail::where('status', 'not_confirmed')
        //                                 ->get();

        $transactions = Payment_detail::latest()->get();
        
        return view('admin.transactions.index', compact('transactions'));       
    }

    public function confirm_transaction($id)
{
    $paymentDetail = DB::table('payment_details')->where('id', $id)->first();
    

    $payment = DB::table('payments')->where('id', $paymentDetail->payment_id)->first();
    

    DB::table('payment_details')->where('id', $id)->update(['status' => 'confirmed']);
    DB::table('payments')->where('id', $paymentDetail->payment_id)->update(['is_validate' => 1]);

    $user = DB::table('users')
        ->join('inscriptions', 'inscriptions.user_id', '=', 'users.id')
        ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
        ->where('payments.id', $paymentDetail->payment_id)
        ->select('users.email')
        ->first();

    if ($user) {
        SendConfirmedPaymentNotificationEmail::dispatch($user->email, $id);
    }

    $notification = array(
        'message' => 'Confirmation effectuée avec succès',
        'alert-type' => 'success'
    );

    return back()->with($notification);
}

    public function confirm_transaction_reset($id) {
        $paymentDetail = DB::table('payment_details')->where('id', $id)->first();
    
        $payment = DB::table('payments')->where('id', $paymentDetail->payment_id)->first();
        
        DB::table('payment_details')->where('id', $id)->update(['status' => 'not_confirmed']);
        DB::table('payments')->where('id', $paymentDetail->payment_id)->update(['is_validate' => 0]);

        $user = DB::table('users')
            ->join('inscriptions', 'inscriptions.user_id', '=', 'users.id')
            ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
            ->where('payments.id', $paymentDetail->payment_id)
            ->select('users.email')
            ->first();

        // SendConfirmedPaymentNotificationEmail::dispatch($user->email, $id);

        $notification = array(
            'message' => 'Annulation effectuée avec succès',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
