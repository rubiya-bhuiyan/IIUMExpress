<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function submitAssistance(Request $request)
    {
        $request->validate([
            'issue_type' => 'required|string',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id() ?? 1,
            'receiver_id' => 1,
            'message' => $request->issue_type . ': ' . $request->message,
        ]);

        return redirect()->back()->with(
            'success',
            'Your assistance request has been submitted successfully.'
        );
    }
}
