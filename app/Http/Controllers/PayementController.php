<?php

namespace App\Http\Controllers;

use App\Models\Payement;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayementController extends Controller
{
    public function index(){
        $payements = DB::table('payements')
            ->join('evenements', 'payements.evenement_id', '=', 'evenements.id')
            ->select('payements.*', 'evenements.libelle as evenement_libelle')
            ->latest()
            ->get();
        return view('admin.payement.index', compact('payements'));
    }

    public function createForm(){
        $evenements = Evenement::latest()->get();
        return view('admin.payement.create', compact('evenements'));
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'reference' => 'required',
            'type' => 'required',
            'date' => 'required',
            'montant' => 'required',
            'evenement_id' => 'required',
        ]);

        $payement = new Payement();

        $payement->reference = $validatedData['reference'];
        $payement->type = $validatedData['type'];
        $payement->date = $validatedData['date'];
        $payement->montant = $validatedData['montant'];
        $payement->evenement_id = $validatedData['evenement_id'];
        $payement->save();

        return redirect()->route('payement.index');
    }

    public function edit($id){
        $payement = Payement::findOrFail($id);
        $evenements = Evenement::latest()->get();
        return view('admin.payement.edit', compact('payement', 'evenements'));
    }

    public function update(Request $request, $id){
        $payement = Payement::findOrFail($id);
        $validatedData = $request->validate([
            'reference' => 'required',
            'type' => 'required',
            'date' => 'required',
            'montant' => 'required',
            'evenement_id' => 'required',
        ]);

        $payement->update($validatedData);

        return redirect()->route('payement.index');
    }

    public function destroy($id){
        $payement = Payement::findOrFail($id);
        $payement->delete();
        return redirect()->route('payement.index');
    }
}
