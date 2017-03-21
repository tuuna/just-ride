<?php

namespace App\Http\Controllers;

use App\Message;
use App\Repositories\IndexInfoRepository;
use Illuminate\Http\Request;
use Auth;

class InboxController extends AppController
{
    public function __construct(IndexInfoRepository $categories)
    {
        parent::__construct($categories);
        $this->middleware('auth');
    }

    public function index()
    {
//        $messages = Auth::user()->messages->groupBy('from_user_id');
        $messages = Message::where('to_user_id',Auth::user()->id)
                           ->orwhere('from_user_id',Auth::user()->id)
                           ->with(['fromUser','toUser'])
                           ->get();
        $categories = $this->parent();
        $messageCount = $this->messageCount();
        return view('inbox.index',['messages' => $messages->groupBy('to_user_id'),'categories' => $categories,'messageCount' => $messageCount]);
    }

    public function show($dialogId)
    {
        $messages = Message::where('dialog_id',$dialogId)->latest()->get();
//        dd($messages->groupBy('to_user_id'));
        $categories = $this->parent();
        $messageCount = $this->messageCount();
        return view('inbox.show',['messages' => $messages->groupBy('to_user_id'),'dialogId' => $dialogId,'categories' => $categories,'messageCount' => $messageCount]);
    }

    public function store($dialogId)
    {
        $message = Message::where('dialog_id',$dialogId)->first();
        $toUserId = $message->from_user_id == Auth::user()->id ? $message->to_user_id : $message->from_user_id;
        Message::create([
           'from_user_id' => Auth::user()->id,
            'to_user_id' => $toUserId,
            'body' => request('body'),
            'dialog_id' => $dialogId
        ]);
        return back();
    }
}
