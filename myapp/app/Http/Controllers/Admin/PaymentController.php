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
        $transactions = Payment_detail::where('status', 'not_confirmed')
                                        ->get();

        return view('admin.transactions.index', compact('transactions'));       
    }

    public function confirm_transaction($id) {
        $payement_detail = Payment_detail::find($id);
        $payement_detail->status = 'confirmed';
        $payement_detail->save();

        $user = DB::table('users')->join('inscriptions', 'inscriptions.user_id', '=', 'users.id')
                ->join('payments', 'payments.inscription_id', '=', 'inscriptions.id')
                ->join('payment_details', 'payment_details.payment_id', '=', 'payments.id')
                ->where('payment_details.id', $id)
                ->select('users.email')
                ->first();

        SendConfirmedPaymentNotificationEmail::dispatch($user->email, $id);

        $notification = array(
            'message' => 'Confirmation effectuée avec succès',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
