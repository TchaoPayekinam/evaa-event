<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('front.inscription');
    }
}
