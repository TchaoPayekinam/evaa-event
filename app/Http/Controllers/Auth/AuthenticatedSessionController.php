<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Cache;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Post Login Function
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        if(Auth::attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
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
                //'message' => 'Les identifiants de connexion sont incorrects',
                'alert-type' => 'error'
            );

            return redirect()->route('user.login')
                ->withInput()
                ->with($notification);
                //->with('error','Les identifiants de connexion sont incorrects');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
