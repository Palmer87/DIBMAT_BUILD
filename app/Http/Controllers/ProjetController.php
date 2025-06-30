<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(projet $projet)
    {
        // Retrieve all projects
        $projets = projet::paginate(10);
        return view("admin.projet.index", ["projets"=> $projets]);

    }
    public function indexpublic(projet $projet)
    {
        // Retrieve all projects
        $projets = projet::paginate(10);
        return view("projet.index", ["projets"=> $projets]);

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
        $request->validate([
            "name"=> "required",
            "description"=> "required",
            "categorie"=> "required",
            "client"=> "required",
            "image"=> "image|nullable|max:2048",
            "date"=> "date|required",
            "lieu"=> "required",
        ]);

        projet::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "categorie"=> $request->categorie,
            "client"=> $request->client,
            "date"=> $request->date,
            "lieu"=> $request->lieu,
            "image"=> $request->file('image')->store('projets', 'public'),
        ]);
        return redirect()->route("projet.index")->with("success", "Projet créé avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        return view("projet.show", ["projet"=> projet::find( $name) ]);
    }
    public function showpublic(string $name)
    {
        return view("projet.show", ["projet"=> projet::find( $name) ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name)
    {
        return view("admin.projet.edit", ["projet"=> projet::find($name)]);
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, string $id)
{
    $request->validate([
        "name" => "required",
        "description" => "required",
        "categorie" => "required",
        "client" => "required",
        "date" => "date|required",
        "lieu" => "required",
        "image" => "nullable|image|max:2048",
    ]);

    $projet = Projet::findOrFail($id);

    $data = $request->only(['name', 'description', 'categorie', 'client', 'date', 'lieu']);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('projets', 'public');
        $data['image'] = $imagePath;
    }

    $projet->update($data);

    return redirect()->route('projets.index')->with('success', 'Projet modifié avec succès');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $projet = Projet::find($id);
    $projet->delete();
    return redirect()->route("projets.index")->with("success", "Projet supprimé avec succès");
}

}
