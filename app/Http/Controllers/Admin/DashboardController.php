<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devis;
use App\Models\Article;
use App\Models\Message;
use App\Models\Projet;

class DashboardController extends Controller
{
    public function index()
    {
        $messages = Message::get();
        $devis=Devis::get();
        $devisderniers = Devis::orderBy('created_at', 'desc')->take(5)->get();
        $messagesDerniers = Message::orderBy('created_at', 'desc')->take(5)->get(); // Fetch the latest 5 Messages records
        // Count the number of records in each model
        $nbDevis = Devis::count();
        $nbArticles = Article::count();
        $nbMessages = Message::count();
        $nbProjets = Projet::count(); // Assuming you have a Projet model

        return view('dashboard', compact('devis','devisderniers', 'nbDevis', 'messages', 'nbProjets', 'nbArticles', 'messagesDerniers', 'nbMessages'));
    }

}
