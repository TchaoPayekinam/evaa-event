<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Utiliser le guard 'admin' pour vérifier l'authentification de l'administrateur
        $admin = Auth::guard('admin')->user();

        if ($admin) {
            // Vérifier si le champ 'password_updated_at' est nul
            if (is_null($admin->password_updated_at)) {
                $notification = array(
                    'message' => 'Veuillez changer le mot de passe avant de poursuivre',
                    'alert-type' => 'info'
                );

                return redirect()->route('password.changed')->with($notification);
            }

            /* $password_changed_at = new Carbon(($user->password_changed_at) ? $user->password_changed_at : $user->created_at);

            if (Carbon::now()->diffInDays($password_changed_at) >= 30) {
                return redirect()->route('password.expired');
            } */
        }

        return $next($request);
    }
}