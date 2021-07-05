<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        $users = User::where('id', '!=', Auth::id())->get();


        return view('chat.index')->with(compact('users'));
    }

    public function getMessage($user_id){
        $my_id = Auth::id();

        // Make read all unread message
        //Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        //Get all message from selected user
        // $messages = Message::where(function ($query){
        //     $query->where('from', $user_id)->where('to', $my_id);
        // })->oRwhere(function ($query){
        //     $query->where('from', $my_id)->where('to', $user_id);
        // })->get();

        $messages = Message::where(['from'=>$user_id, 'to'=>$my_id])->orWhere(['from'=>$my_id, 'to'=>$user_id])->get();
        return view('chat.messages')->with('messages', $messages);
    }
}
