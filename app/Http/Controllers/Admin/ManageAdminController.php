<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Administrator;
use App\Models\Profile;
use Response;
use Illuminate\Support\Facades\Hash;

class ManageAdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::select('id', 'name')->orderBy('name', 'asc')->get();
        $admins = Administrator::select('administrators.*','profiles.name')
                        ->join('profiles', 'administrators.profile_id', '=', 'profiles.id')
                        ->orderBy('last_name', 'asc')
                        ->get();
        return view('admin.users.user', compact('admins','profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|max:255|unique:administrators',
            'profile' => 'required|not_in:0',
        ];

        $messages = [
            'last_name.required' => 'Le champ nom est obligatoire',
            'first_name.required' => 'Le champ prénoms est obligatoire',
            'email.required' => 'Le champ e-mail est obligatoire.',
            'profile.not_in' => 'Le profil sélectionné est invalide.',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()]);
        }

        $user = new Administrator();
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->profile_id = $request->profile;        
        $user->password = Hash::make('EECO@-2024');
        $user->save();

        return Response::json(['success' => '1']);   
    }

    public function resetPassword($id)
    {
        $user = Administrator::find($id);
        $user->password = Hash::make('EECO@-2024');
        $user->password_updated_at = null;
        $user->save();

        //Alert::toast('Mot de passe réinitialisé avec succès', 'success');
        return redirect()->back();
    }

    public function changeStatus($id)
    {
        $user = Administrator::find($id);
        $user->active = $user->active == 1 ? 0 : 1;
        $user->save();

        return Response::json(['success' => '1']); 
    }

    public function user_profile()
    {
        return view('back.user-profile');
    }

    public function destroy(string $id)
    {
        Administrator::destroy($id);
        return redirect()->route('admins.index')->with('danger', 'Utilisateur supprimer');;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|max:255|unique:administrators,email,' . $id,
            'profile' => 'required|not_in:0',
        ];

        $messages = [
            'last_name.required' => 'Le champ nom est obligatoire',
            'first_name.required' => 'Le champ prénoms est obligatoire',
            'email.required' => 'Le champ e-mail est obligatoire.',
            'profile.not_in' => 'Le profil sélectionné est invalide.',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()]);
        }

        $user = Administrator::findOrFail($id);
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->profile_id = $request->profile;        
        $user->save();
        return redirect()->route('admins.index')->with('success', 'Utilisateur modifier');;

          
    }
}
