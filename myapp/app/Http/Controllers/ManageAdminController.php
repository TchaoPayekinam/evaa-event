<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Administrator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class ManageAdminController extends Controller
{
    public function index(){
        $administrators = Administrator::all();
        return view('admin.administrateur.index', compact('administrators'));
    }


    public function createForm(){
        return view('admin.administrateur.create');
    }

 
    public function create(Request $request)
    {
        $request->validate(
            [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:administrators,email',
            'password' => 'required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/',
            'password_confirm' => 'required|same:password',
            ],
        [
            'nom.required' => 'Le champ nom est obligatoire',
            'prenom.required' => 'Le champ prénoms est obligatoire',
            'email.required' => 'Le champ email est obligatoire',
            'email.unique' => 'Cet email est déjà pris',
            'password.required' => 'Le champ mot de passe est obligatoire',
            'password.regex' => 'Mot de passe comportant 1 majuscule, 1 chiffre et un caractère spécial',
            'password.min' => 'Mot de passe comportant au moins 6 caractères',
            'password_confirm.required' => 'Le champ confirme mot de passe est obligatoire',
            'password_confirm.same' => 'Les mots de passe ne sont pas identiques',
        ]
    );
        $administrator = new Administrator();
        $administrator->nom = $request->input('nom');
        $administrator->prenom = $request->input('prenom');
        $administrator->email = $request->input('email');
        $administrator->password = Hash::make($request->input('password'));

        $administrator->save();

        return redirect()->route('manageAdmin.index')->with('success','Utilisateur créé avec success');



    }

    
    public function edit($id)
    {
        $administrator = Administrator::find($id);
        return view('admin.administrateur.edit', compact('administrator'));
    }

    
    public function update(Request $request, $id)
    {
        $administrator = Administrator::find($id);
        $data = $request->validate(
            [
            'nom' => 'required',
            'prenom' => 'required',
            'accreditation' => 'required',
            'email' => 'required|email|unique:administrators,email,' . $id 
            ],
            [
                'nom.required' => 'Le champ nom est obligatoire',
                'prenom.required' => 'Le champ prénoms est obligatoire',
                'email.required' => 'Le champ email est obligatoire',
                'accreditation.required' => 'Le champ accreditation est obligatoire',
                'email.unique' => 'Cet email est déjà pris',
            ]
    );
        
        $administrator->nom = $data['nom'];
        $administrator->prenom = $data['prenom'];
        $administrator->email = $data['email'];
        $administrator->accreditation = $data['accreditation'];
        $administrator->save();
    
        return redirect()->route('manageAdmin.index')->with('success', 'Utilisateur modifié avec succès');
    }

    public function editPassword(){
        return view('admin.administrateur.password_update');
    }

    public function updatePassword(Request $request)
{
    $data = $request->validate(
        [
            'oldPassword' => 'required',
            'password' => 'required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/',
            'confirmPassword' => 'required|min:6|same:password',
        ],
        [
            'oldPassword.required' => 'Saisir votre ancien mot de passe',
            'password.required' => 'Saisir votre nouveau mot de passe',
            'confirmPassword.required' => 'Confirmer votre nouveau mot de passe',
            'password.regex' => 'Le mot de passe doit comporter au moins une majuscule, un chiffre et un caractère spécial',
            'password.min' => 'Le mot de passe doit comporter au moins 6 caractères',
            'confirmPassword.same' => 'Les mots de passe ne sont pas identiques',
        ]
    );

    $administrator = Auth::guard('admin')->user();

    if (!Hash::check($request->oldPassword, $administrator->password)) {
        return redirect()->route('manageAdmin.editPassword')->with('danger', 'Ancien mot de passe incorrect.');
    }

    $administrator->password = Hash::make($data['password']);
    $administrator->save();

    return redirect()->route('manageAdmin.index')->with('success', 'Mot de passe modifié avec succès.');
}

    

 
    public function destroy(string $id)
    {
        Administrator::destroy($id);
        return redirect()->route('manageAdmin.index')->with('danger', 'Utilisateur supprimer');;
    }


    public function search(Request $request){
        $nom = $request->input('nom');
        $administrators = Administrator::where('nom', 'LIKE', "%$nom%")->simplePaginate(10);
        return view('admin.administrateur.index', compact('administrators'));
    }

}
