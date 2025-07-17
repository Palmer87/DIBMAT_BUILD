<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Liste des articles pour l'admin
    public function index()
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
        $slug = Str::slug($request->titre);

        // Vérifie l'unicité du slug (ajout d'un suffixe si nécessaire)
        $originalSlug = $slug;
        $counter = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        if($request->has('image'))
        {
            $file = $request->file('image');
            $filename = 'article_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/articles/'), $filename);
            $imgPrincipal = 'uploads/articles/' . $filename;
        }


        Article::create([
            'titre' => $request->titre,
            'slug' => $slug,
            'contenu' => $request->content,
            'categorie' => $request->categorie,
            'image' => $imgPrincipal,

        ]);

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }


    // Détail d'un article public
    public function show(Article $article)
    {
        //$article = Article::where('id', $id)->firstOrFail();

        return view('admin.article.show', compact('article'));
    }

    // Formulaire d'édition (admin)
    public function edit(Article $article)
    {
        //$article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.article.edit', compact('article'));
    }

    // Mise à jour d'un article (admin)
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'mimes:jpeg,png,jpg|max:2048',
            'categorie' => 'required|string|in:Evènement,Construction,Batiment,Climatisation,Electricité',
            'content' => 'required|string',
        ]);

        // Vérifie si le titre a changé pour régénérer un slug unique
        if ($request->titre !== $article->titre) {
            $slug = Str::slug($request->titre);
            $originalSlug = $slug;
            $counter = 1;
            while (Article::where('slug', $slug)->where('id', '!=', $article->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $article->slug = $slug;
        }

        $article->titre = $request->titre;
        $article->categorie = $request->categorie;
        $article->contenu = $request->content;

        // Si une nouvelle image est envoyée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }

            $file = $request->file('image');
            $filename = 'article_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/articles/'), $filename);
            $article->image = 'uploads/articles/' . $filename;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    


    // Suppression d'un article (admin)
    public function destroy(Article $article)
    {
        //$article = Article::where('slug', $slug)->firstOrFail();
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès !');
    }
}
