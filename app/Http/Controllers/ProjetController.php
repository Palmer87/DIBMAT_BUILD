<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(projet $projet)
    {
        $projets = projet::paginate(10);
        return view("admin.projet.index", compact('projets'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projet.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'imagecliche' => 'array|max:6', // max 6 fichiers
            'imagecliche.*' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);


        $slug = Str::slug($request->name);

        // Vérifie l'unicité du slug (ajout d'un suffixe si nécessaire)
        $originalSlug = $slug;
        $counter = 1;
        while (Projet::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        // Image principale
        $imgPrincipal = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'projet_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projets/'), $filename);
            $imgPrincipal = 'uploads/projets/' . $filename;
        }

        // Clichés multiples
        $imageCliches = [];
        if ($request->hasFile('imagecliche')) {
            foreach ($request->file('imagecliche') as $file) {
                $filename = 'cliche_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/projets/cliches/'), $filename);
                $imageCliches[] = 'uploads/projets/cliches/' . $filename;
            }
        }

        Projet::create([
            'name' => $validated['name'],
            'slug' => $slug,
            'client' => $validated['client'],
            'lieu' => $validated['lieu'],
            'categorie' => $validated['categorie'],
            'date' => $validated['date'],
            'description' => $validated['description'],
            'image' => $imgPrincipal,
            'imagecliche' => json_encode($imageCliches), // stocké en JSON
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view("admin.projet.show", compact('projet'));
    }


    public function edit(Projet $projet)
    {
        return view("admin.projet.edit", compact('projet'));
    }

   

    public function update(Request $request, Projet $projet)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'imagecliche' => 'nullable|array|max:6',
            'imagecliche.*' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Slug unique (mis à jour seulement si le nom change)
        if ($projet->name !== $request->name) {
            $slug = Str::slug($request->name);
            $originalSlug = $slug;
            $counter = 1;
            while (Projet::where('slug', $slug)->where('id', '!=', $projet->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $projet->slug = $slug;
        }

        // Image principale (si nouvelle image, on remplace)
        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image
            if ($projet->image && File::exists(public_path($projet->image))) {
                File::delete(public_path($projet->image));
            }

            $file = $request->file('image');
            $filename = 'projet_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/projets/'), $filename);
            $projet->image = 'uploads/projets/' . $filename;
        }

        // Clichés multiples (si de nouvelles, on remplace toutes)
        if ($request->hasFile('imagecliche')) {
            // Supprimer les anciens clichés
            if ($projet->imagecliche) {
                foreach (json_decode($projet->imagecliche, true) as $oldCliche) {
                    if (File::exists(public_path($oldCliche))) {
                        File::delete(public_path($oldCliche));
                    }
                }
            }

            $imageCliches = [];
            foreach ($request->file('imagecliche') as $file) {
                $filename = 'cliche_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/projets/cliches/'), $filename);
                $imageCliches[] = 'uploads/projets/cliches/' . $filename;
            }

            $projet->imagecliche = json_encode($imageCliches);
        }

        // Mise à jour des autres champs
        $projet->update([
            'name' => $validated['name'],
            'client' => $validated['client'],
            'lieu' => $validated['lieu'],
            'categorie' => $validated['categorie'],
            'date' => $validated['date'],
            'description' => $validated['description'],
            // 'image' et 'imagecliche' sont déjà mis à jour dans l’objet
        ]);

        $projet->save();

        return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        // Supprimer l’image principale
        if ($projet->image && File::exists(public_path($projet->image))) {
            File::delete(public_path($projet->image));
        }

        // Supprimer les clichés (images multiples)
        if ($projet->imagecliche) {
            foreach (json_decode($projet->imagecliche, true) as $cliche) {
                if (File::exists(public_path($cliche))) {
                    File::delete(public_path($cliche));
                }
            }
        }

        // Supprimer l'enregistrement en base
        $projet->delete();

        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès.');
    }

}
