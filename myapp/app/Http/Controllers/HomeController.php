<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function contact() {
        return view('front.contact');
    }

    public function about() {
        return view('front.about');
    }

    public function services() {
        return view('front.services');
    }

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
