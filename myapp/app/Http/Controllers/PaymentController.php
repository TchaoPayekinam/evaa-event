<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function flooz(){
        return view("front.event.payment.flooz");
    }
    public function tMoney(){
        return view("front.event.payment.tMoney");
    }
    public function westernUnion(){
        return view("front.event.payment.westernUnion");
    }
    public function moneyGram(){
        return view("front.event.payment.moneyGram");
    }
    public function cash(){
        return view("front.event.payment.cash");
    }
}