<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devis;
use App\Models\Article;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $nbDevis = Devis::count();
        $nbArticles = Article::count();
        $nbMessages = Message::count();

        return view('admin.dashboard', compact('nbDevis', 'nbArticles', 'nbMessages'));
    }
}