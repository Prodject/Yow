<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Message;

class ContactsController extends Controller
{
    public function get()
    {
        $contacts = User::all();

        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        $messages = Message::where('from', $id)->orWhere('to', $id)->get();

        return response()->json($messages);
    }
}
