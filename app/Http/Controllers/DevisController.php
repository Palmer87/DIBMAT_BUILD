<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
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
    public function store(DevisRequest $request)
    {
        Devis::create($request->validated());
        notify()->success('Votre demande de devis a bien été envoyée !');
        // Redirection avec message de succès
        return redirect()->route('public.devis.create');
    }

    // Liste des devis pour l'admin


    // Liste des devis pour l'admin
    public function index()
    {
        $devis = Devis::latest()->paginate(20);
        return view('admin.devis.index', compact('devis'));
    }

    // Voir un devis en détail (admin)
    public function show($slug)
    {
        $devis = Devis::where('slug', $slug)->firstOrFail();
        return view('admin.devis.show', compact('devis'));
    }

    // Supprimer un devis (admin)
    public function destroy(  $id)
    {
        $devis = Devis::where('id', $id)->firstOrFail();
        // Vérification de l'existence du devis
        if (!$devis) {
            return redirect()->route('devis.index')->with('error', 'Devis non trouvé.');
        }
        $devis->delete();
        // Notification de succès
        notify()->success('Devis supprimé avec succès !');
        return redirect()->route('devis.index');
    }
}
