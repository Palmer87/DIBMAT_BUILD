<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil()
    {
        return view('home.accueil');
    }

    public function histoire()
    {
        return view('home.notre_histoire');
    }

    public function expertise()
    {
        return view('home.notre_expertise');
    }

    public function projets()
    {
        return view('home.projets');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function actualites()
    {
        return view('home.actualites');
    }

    public function devis()
    {
        return view('home.devis');
    }


}
