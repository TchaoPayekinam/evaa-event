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
        
        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            
            // Récupérer l'utilisateur authentifié
            $user = Auth::user();

            // Vérifier si l'utilisateur a vérifié son email
            if (!$user->hasVerifiedEmail()) {
                // Déconnecter l'utilisateur
                //Auth::logout();

                 $notification = array(
                    'message' => __('verify-email.must-verify'),
                    'alert-type' => 'info'
                );

                // Rediriger vers la page de vérification d'email
                return redirect()->route('verification.notice')
                                ->with($notification);
            }

            // Récupérer l'ID de session de l'utilisateur
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
            $user->save();

            return redirect()->intended(route('home.index'));
        } else {
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