<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller

use App\Models\Evenement;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        $evenements = Evenement::latest()->get();
        return view('admin.evenement.index', compact('evenements'));
    }

    public function createForm(){
        return view('admin.evenement.create');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'libelle' => 'required',
            'lieu' => 'required',
            'date' => 'required'
        ]);

        $evenement = new Evenement();

        $evenement->libelle = $validatedData['libelle'];
        $evenement->lieu = $validatedData['lieu'];
        $evenement->date = $validatedData['date'];
        $evenement->save();

        return redirect()->route('evenement.index');
    }

    public function edit($id){
        $evenement = Evenement::findOrFail($id);
        return view('admin.evenement.edit', compact('evenement'));
    }

    public function update(Request $request, $id){
        $evenement = Evenement::findOrFail($id);
        $validatedData = $request->validate([
            'libelle' => 'required',
            'lieu' => 'required',
            'date' => 'required'
        ]);

        $evenement->update($validatedData);

        return redirect()->route('evenement.index');
    }

    public function destroy($id){
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();
        return redirect()->route('evenement.index');
    }
}
