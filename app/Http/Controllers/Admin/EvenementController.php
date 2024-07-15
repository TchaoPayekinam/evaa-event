<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Event;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        $evenements = Event::latest()->get();
        return view('admin.evenement.index', compact('evenements'));
    }

    public function createForm(){
        return view('admin.evenement.create');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'lieu' => 'required',
            'frais_inscription' => 'required',
            'frais_formation' => 'required',
            'date_deb' => 'required',
            'date_fin' => 'required',
            
        ]);

        $evenement = new Event();

        $evenement->name = $validatedData['name'];
        $evenement->name = $validatedData['description'];
        $evenement->type = $validatedData['type'];
        $evenement->lieu = $validatedData['lieu'];
        $evenement->lieu = $validatedData['description'];
        $evenement->frais_inscription = $validatedData['frais_inscription'];
        $evenement->frais_formation = $validatedData['frais_formation'];
        $evenement->date_deb = $validatedData['date_deb'];
        $evenement->date_fin = $validatedData['date_fin'];
        $evenement->save();

        return redirect()->route('evenement.index');
    }

    public function edit($id){
        $evenement = Event::findOrFail($id);
        return view('admin.evenement.edit', compact('evenement'));
    }

    public function update(Request $request, $id){
        $evenement = Event::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'name' => 'description',
            'type' => 'required',
            'lieu' => 'required',
            'frais_inscription' => 'required',
            'frais_formation' => 'required',
            
        ]);

        $evenement->update($validatedData);

        return redirect()->route('evenement.index');
    }

    public function destroy($id){
        $evenement = Event::findOrFail($id);
        $evenement->delete();
        return redirect()->route('evenement.index');
    }
}
