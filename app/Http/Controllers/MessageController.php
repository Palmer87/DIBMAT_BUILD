<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Formulaire public de contact
    public function create()
    {
        return view('contact.create');
    }

    // Enregistrement du message public
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Message::create($request->all());

        return redirect()->route('public.contact.create')->with('success', 'Votre message a bien été envoyé !');
    }

    // Liste des messages pour l'admin
    public function index()
    {
        $messages = Message::latest()->paginate(20);
        return view('admin.message.index', compact('messages'));
    }

    // Voir un message en détail (admin)
    public function show(Message $message)
    {

        return view('admin.message.show', compact('message'));
    }
   /* public function reponse(Message $message) {
        $message->get();
        return view('admin.message.reponse',compact('message'));
    }
    //public function repondre(Request $request, Message $message)
    {
        $request->validate([
            'reponse' => 'required|string',
        ]);

        $message->update([
            'reponse' => $request->input('reponse'),
            'reponse_at' => now(),
        ]);



        return redirect()->route('message.show', $message)->with('success', 'Réponse envoyée.');
   // }*/

    // Supprimer un message (admin)
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message supprimé.');
    }
}
