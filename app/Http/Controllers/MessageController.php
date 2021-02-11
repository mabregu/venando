<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        # code...
    }

    public function create()
    {
        $users = User::where('id', '!=', auth()->id())->get();

        return view('messages.create', compact('users'));
    }

    public function store(Request $request)
    {
        // TEST: dd($request->all());
        $this->validate($request, [
            'body' => 'required',
            'subject' => 'required',
            'recipient_id' => 'required|exists:users,id'
        ]);

        $message = Message::create([
            'sender_id' => auth()->id(),
            'recipient_id' => $request->recipient_id,
            'body' => $request->body,
            'subject' => $request->subject
        ]);

        $recipient = User::find($request->recipient_id);

        

        return back()->with('message', ['success', __('Your message was sent')]);
    }
}
