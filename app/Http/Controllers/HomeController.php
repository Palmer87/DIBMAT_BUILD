<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Http\Requests\MessageRequest;
use App\Models\Article;
use App\Models\Devis;
use App\Models\Message;
use App\Models\Projet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil()
    {
        $articlesRecents = Article::latest()->take(3)->get();
        $projetsRecents = Projet::latest()->take(3)->get();

        return view('home.accueil', compact('articlesRecents', 'projetsRecents'));
    }

    public function histoire()
    {
        return view('home.notre_histoire');
    }

    public function expertise()
    {
        return view('home.notre_expertise');
    }

    public function service_construction()
    {
        $projetsRecents = Projet::where('categorie', 'construction metallique')->latest()->take(3)->get();
        return view('home.services.construction', compact('projetsRecents'));
    }

    public function batiment()
    {
        $projetsRecents = Projet::where('categorie', 'batiment')->latest()->take(3)->get();
        return view('home.services.batiment', compact('projetsRecents'));
    }

    public function climatisation()
    {
        $projetsRecents = Projet::where('categorie', 'travaux de climatisation')->latest()->take(3)->get();

        return view('home.services.climatisation', compact('projetsRecents'));
    }

    public function electricite_energie()
    {
        $projetsRecents = Projet::where('categorie', 'electricité et energie')->latest()->take(3)->get();
        return view('home.services.electricite', compact('projetsRecents'));
    }

    public function projets()
    {
        $projets = Projet::all();
        return view('home.projets', compact('projets'));
    }

    public function projets_detail($slug)
    {
        // Récupérer l'article par son slug
        $projet = Projet::where('slug', $slug)->firstOrFail();

        $projetsRecents = Projet::latest()->take(3)->get();
        

        return view('home.projets.detail', compact('projet', 'projetsRecents'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function contact_store(MessageRequest $request)
    {
        Message::create($request->validated());

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function actualites()
    {
        $articles = Article::all();
        return view('home.actualites', compact('articles'));
    }

    public function actualites_show($slug)
    {
        $articlesRecents = Article::latest()->take(3)->get();
        // Récupérer l'article par son slug
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('home.actualites.detail', compact('articlesRecents', 'article'));
    }

    public function devis()
    {
        return view('home.devis');
    }

    public function devis_store(DevisRequest $request)
    {
        Devis::create($request->validated());
        return redirect()->back()->with('success', 'Votre demande de devis a bien été envoyée !');
    }

}
