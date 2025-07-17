<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devis;
use App\Models\Article;
use App\Models\Message;
use App\Models\Projet;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $messages = Message::get();
        $devis = Devis::orderBy('created_at', 'desc')->take(5)->get();
        $messagesDerniers = Message::orderBy('created_at', 'desc')->take(5)->get(); // Fetch the latest 5 Messages records
        // Count the number of records in each model
        $nbDevis = Devis::count();
        $nbArticles = Article::count();
        $nbMessages = Message::count();
        $nbProjets = Projet::count(); // Assuming you have a Projet model

        return view('dashboard', compact('devis', 'nbDevis', 'messages', 'nbProjets', 'nbArticles', 'messagesDerniers', 'nbMessages'));
    }

    public function liste_user()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        // Rediriger vers la liste des produits avec un message de succès
        return redirect()->route('user.liste')->with('success', 'Utilisateur supprimé avec succès');
    }

    

}
