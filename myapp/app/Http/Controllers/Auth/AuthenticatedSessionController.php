<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Cache;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Post Login Function
        $input = $request->all();
  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt(array('email' => $input['username'], 'password' => $input['password'])))
        {
            // Récupérer l'ID de session de l'utilisateur
            $sessionId = session()->getId();

            // Récupérer la liste des sessions actives
            $activeSessions = Cache::get('active_sessions', []);

            // Ajouter l'ID de session à la liste des sessions actives
            /*if (!in_array($sessionId, $activeSessions)) {
                $activeSessions[] = $sessionId;
                Cache::put('active_sessions', $activeSessions, 60);
            }*/
            if (!isset($activeSessions[$sessionId])) {
                $activeSessions[$sessionId] = Auth::id();
                Cache::put('active_sessions', $activeSessions, 60);
            }

            // Update Last Login
            $user = Auth::user();
            $user->last_login_at = \Carbon\Carbon::now();
            $user->save();

            /* if (Auth::User()->password_change_at == null)
                return redirect()->route('password.changed'); */

            return redirect()->intended(RouteServiceProvider::HOME);
        } else{
            $notification = array(
                'message' => __('auth.failed'),
                'alert-type' => 'error'
            );

            return redirect()->route('user.login')
                ->withInput()
                ->with($notification);
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}