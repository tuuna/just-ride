<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;

class InboxController extends AppController
{
    public function index()
    {
        $messages = Auth::user()->messages->groupBy('from_user_id');
        $categories = $this->parent();
        $messageCount = $this->messageCount();
        return view('inbox.index',['messages' => $messages,'categories' => $categories,'messageCount' => $messageCount]);
    }

    public function show($userId)
    {
        $messages = Message::where('from_user_id',$userId)->get();
    }
}
