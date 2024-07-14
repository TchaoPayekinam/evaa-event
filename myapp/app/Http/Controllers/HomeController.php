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
    public function dashboard() {
        return view('front.dashboard');
    }
    public function confirm_order() {
        return view('front.event.confirm_order');
    }
}
