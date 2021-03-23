<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $game = Game::all()->where('id', 3);
        dd($game);
    }  
    
    public function create(){
        return view('pages.create');
    }   
}
