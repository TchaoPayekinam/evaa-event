<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.auth.change-password');
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postChanged(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
                'password.confirmed'=>'Le mot de passe de confirmation est incorrect',
                'password.min'=>'La taille minimale du mot de passe est 8',
                'password.mixedCase'=>'Le mot de passe nécessite au moins une lettre majuscule et une lettre minuscule',
                'password.letters'=>'Le mot de passe nécessite au moins une lettre',
                'password.numbers'=>'Le mot de passe nécessite au moins un chiffre',
                'password.symbols'=>'Le mot de passe nécessite au moins un symbole',
        ]);        

        // Checking current password
        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->current_password, $admin->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Le mot de passe actuel n\'est pas correct']);
        }

        if(strcmp($request->current_password, $request->password) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Le nouveau mot de passe ne peut pas être le même que votre mot de passe actuel. Veuillez choisir un autre mot de passe.");
        }

        $admin->update([
            'password' => bcrypt($request->password),
            'password_updated_at' => Carbon::now()->toDateTimeString()
        ]);
        
        $notification = array(
            'message' => 'Bienvenue, Mot de passe modifié avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.dashboard')
            ->with($notification);

    }
}