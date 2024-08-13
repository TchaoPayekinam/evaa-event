<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

//use App\Models\Administrator;
//use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function adminLoginForm(){
        /*$moi = new Administrator();
        $moi->last_name = 'AJAVON';
        $moi->first_name = 'Ayi Daniel';
        $moi->email = 'danielajavon@gmail.com';
        $moi->password = Hash::make('1234');
        $moi->profile_id = 1;
        $moi->save();*/
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
        
        if(Auth::guard('admin')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            /*// Récupérer l'ID de session de l'utilisateur
            $sessionId = session()->getId();

            // Récupérer la liste des sessions actives
            $activeSessions = Cache::get('active_sessions', []);

            // Ajouter l'ID de session à la liste des sessions actives
            if (!isset($activeSessions[$sessionId])) {
                $activeSessions[$sessionId] = Auth::id();
                Cache::put('active_sessions', $activeSessions, 60);
            }

            // Update Last Login
            $user = Auth::user();
            $user->last_login_at = \Carbon\Carbon::now();
            $user->save();*/

            return redirect()->intended(route('admin.dashboard'));
        } else {

            return redirect()->route('admin.login')
                ->withInput()
                ->with('error','Les identifiants de connexion sont incorrects');         
        }
    }
    
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}