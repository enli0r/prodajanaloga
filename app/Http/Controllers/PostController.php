<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('pages.posts')->with('posts', $posts);
    }  
    
    public function store(){
        return view('pages.create');
    }   


}
