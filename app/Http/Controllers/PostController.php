<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }  
    
    public function create(){
        return view('posts.create');
    }   


    public function store(Request $request){
        
    }   


}
