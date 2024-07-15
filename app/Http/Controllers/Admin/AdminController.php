<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function adminLoginForm(){
        // $moi = new Administrator();
        // $moi->nom = 'AJAVON';
        // $moi->prenom = 'Ayi Daniel';
        // $moi->email = 'danielajavon@gmail.com';
        // $moi->password = Hash::make('1234');
        // $moi->save();
        return view('admin.auth.login');
    }


    public function doLogin(Request $request)
    {
        // Post Login Function
        $input = $request->all();
  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        // dd($input);
        
        if(Auth::guard('admins')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            // dd("eeeee");
            // Récupérer l'ID de session de l'utilisateur
            $sessionId = session()->getId();

            // Récupérer la liste des sessions actives
            $activeSessions = Cache::get('active_sessions', []);

            // Ajouter l'ID de session à la liste des sessions actives
            if (!isset($activeSessions[$sessionId])) {
                $activeSessions[$sessionId] = Auth::id();
                Cache::put('active_sessions', $activeSessions, 60);
            }

            // // Update Last Login
            // $user = Auth::user();
            // $user->last_login_at = \Carbon\Carbon::now();
            // $user->save();

            return redirect()->intended(route('admin.dashboard'));
            //return redirect()->intended(RouteServiceProvider::HOME);
        } else{
            $notification = array(
                'message' => __('auth.failed'),
                'alert-type' => 'error'
            );

            return redirect()->route('admin.login')->with('danger', 'Vos identifiants sont incorrect');

            
        }
    }



}
