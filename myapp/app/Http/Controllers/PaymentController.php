<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function flooz(){
        return view("payment.flooz");
    }
    public function tMoney(){
        return view("payment.tMoney");
    }
    public function westernUnion(){
        return view("payment.westernUnion");
    }
    public function moneyGram(){
        return view("payment.moneyGram");
    }
    public function cash(){
        return view("payment.cash");
    }

}
