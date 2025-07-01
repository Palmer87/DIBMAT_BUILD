<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Liste publique des articles publiés
    public function index()
    {

        $articles = Article::paginate(6);
        return view('article.index', compact('articles'));
    }



    // Détail d'un article public
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('article.show', compact('article'));
    }

    // Liste des articles pour l'admin
    public function adminIndex()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.article.index', compact('articles'));
    }

    // Formulaire de création (admin)
    public function create()
    {
        return view('admin.article.create');
    }

    // Enregistrement d'un article (admin)
    public function store(ArticleRequest $request)
    {

        $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        }
        Article::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imagePath,

        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article créé.');
    }

    // Formulaire d'édition (admin)
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.article.edit', compact('article'));
    }

    // Mise à jour d'un article (admin)
    public function update(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        $article->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,

        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article mis à jour.');
    }

    // Suppression d'un article (admin)
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->delete();
        notify()->success('Article supprimé avec succès !');
        return redirect()->route('admin.articles.index');
    }
}
