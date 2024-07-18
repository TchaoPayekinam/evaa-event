<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            //'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'lastName' => ['required', 'string'],
            'firstName' => ['required', 'string'],
        ], [
            'email.unique' => 'Un compte avec cette adresse e-mail existe déjà.',
            'password.confirmed'=>'Le mot de passe de confirmation est incorrect',
            'password.min'=>'La taille minimale du mot de passe est 8',
            'password.mixedCase'=>'Le mot de passe nécessite au moins une lettre majuscule et une lettre minuscule',
            'password.letters'=>'Le mot de passe nécessite au moins une lettre',
            'password.numbers'=>'Le mot de passe nécessite au moins un chiffre',
            'password.symbols'=>'Le mot de passe nécessite au moins un symbole',
            'lastName.required'=> 'Le nom est obligatoire',
            'firstName.required'=> 'Le prénom est obligatoire',
        ]);

        $user = User::create([
            'lastName' => $request->lastName,
            'firstName' => $request->firstName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
