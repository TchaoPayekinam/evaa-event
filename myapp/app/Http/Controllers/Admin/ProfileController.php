<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::select('id', 'name')->orderBy('name', 'asc')->get();
        return view('admin.users.profile', compact('profiles'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50|unique:profiles',
        ]);

        $profile = new Profile;
        $profile->name = $request->name;
        $profile->save();

        $notification = array(
            'message' => 'Profil ajouté avec succès',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->name = $request->name;
        $profile->save();

        $notification = array(
            'message' => 'Profil modifié avec succès',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function destroy($id)
    {
        //
    }
}