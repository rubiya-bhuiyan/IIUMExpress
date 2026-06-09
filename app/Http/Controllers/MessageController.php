<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::where('sender_id', Auth::id())
            ->orWhere('receiver_id', Auth::id())
            ->latest()
            ->get();

        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function show($id)
    {
        $message = Message::where('sender_id', Auth::id())
            ->orWhere('receiver_id', Auth::id())
            ->findOrFail($id);

        return view('messages.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::where('sender_id', Auth::id())
            ->orWhere('receiver_id', Auth::id())
            ->findOrFail($id);

        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
