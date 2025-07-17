<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{

    // Liste des devis pour l'admin
    public function index()
    {
        $devis = Devis::latest()->paginate(20);
        return view('admin.devis.index', compact('devis'));
    }

    // Voir un devis en détail (admin)
    public function show($id)
    {
        $devis = Devis::where('id', $id)->firstOrFail();
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
