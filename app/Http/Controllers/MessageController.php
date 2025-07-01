<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
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
    public function store(MessageRequest $request)
    {
        Message::create($request->validated());
        // Notification de succès
        notify()->success('Votre message a bien été envoyé !');

        return redirect()->route('public.contact.create');
    }

    // Liste des messages pour l'admin
    public function index()
    {
        $messages = Message::latest()->paginate(20);
        return view('admin.message.index', compact('messages'));
    }

    // Voir un message en détail (admin)
    public function show($slug)
    {
        $message = Message::where('slug', $slug)->firstOrFail();

        return view('admin.message.show', compact('message'));
    }


    public function destroy($slug)
    {
        $message = Message::where('slug', $slug)->firstOrFail();

        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Message supprimé.');
    }
}
