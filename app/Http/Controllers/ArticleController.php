<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
    public function show(Article $article)
    {
        abort_unless($article->publie, 404);
        return view('articles.show', compact('article'));
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
    public function store(Request $request)
    {

        $request->validate([
    'titre' => 'required|string|max:255',
    'contenu' => 'required|string',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

]);

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
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    // Mise à jour d'un article (admin)
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'publie' => 'boolean',
        ]);

        $article->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'publie' => $request->has('publie'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour.');
    }

    // Suppression d'un article (admin)
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé.');
    }
}
