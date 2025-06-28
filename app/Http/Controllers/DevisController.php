<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    // Affiche le formulaire public
    public function create()
    {
        return view('devis.create');
    }

    // Enregistre la demande de devis
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom'=>'required',
            'email' => 'required|email',
            'numero' => 'nullable|string|max:30',
            'message' => 'required|string',
        ]);


        Devis::create($request->all());

        return redirect()->route('devis.create')->with('success', 'Votre demande de devis a bien été envoyée !');
    }

    // Liste des devis pour l'admin
    public function index()
    {
        $devis = Devis::latest()->paginate(20);
        return view('admin.devis.index', compact('devis'));
    }

    // Voir un devis en détail (admin)
    public function show(Devis $devis)
    {
        return view('admin.devis.show', compact('devis'));
    }

    // Supprimer un devis (admin)
    public function destroy(Devis $devis)
    {
        $devis->delete();
        return redirect()->route('devis.index')->with('success', 'Devis supprimé.');
    }
}
