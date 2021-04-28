<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        //selecting all users except logged in
        $users = User::where('id', '!=', Auth::id())->get();


        return view('pages.chat')->with(compact('users'));
    }
}
