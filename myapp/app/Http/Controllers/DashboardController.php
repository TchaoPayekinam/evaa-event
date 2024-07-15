<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $inscriptions = Inscription::where('user_id', auth()->id())->get();
        //$payments = Payment::where('user_id', auth()->id())->get();
        return view("front.dashboard.index",compact("inscriptions"));
    }

    public function inscriptionDetails($id)
{
    $inscription = Inscription::findOrFail($id);
    return view('front.dashboard.inscription_details', compact('inscription'));
}

    public function payment(){

    }
}
