<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->paginate(20);
        return view('admin.message.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::where('id', $id)->firstOrFail();

        return view('admin.message.show', compact('message'));
    }


    public function destroy($id)
    {
        $message = Message::where('id', $id)->firstOrFail();

        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Message supprimé.');
    }
}
