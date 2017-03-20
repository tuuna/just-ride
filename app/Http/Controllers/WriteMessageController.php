<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class WriteMessageController extends AppController
{
    public function index($id)
    {
        $categories = $this->parent();
        $toUser = User::find($id)->first();
        return view('message.sendCertainMessage',['categories' => $categories,'userInfo' => $toUser]);
    }


    public function sent(Request $request)
    {
        Message::create([
           'to_user_id' =>  $request->get('to_user_id'),
            'from_user_id' => $request->get('from_user_id'),
            'body' => $request->get('body')
        ]);
        return redirect('/');
    }
}
