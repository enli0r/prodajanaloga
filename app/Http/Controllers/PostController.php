<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use App\Models\Attributes;
use Illuminate\Http\Request;
use PhpParser\Node\Attribute;
use App\Models\AttributeValue;

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

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'username' => 'required',
            'price' => 'required',
            'flexRadioDefault' => 'required',
        ]);
 
        $post = new Post;

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->username = $request->input('username');
        $post->price = $request->input('price');
        $post->game_id = $request->input('flexRadioDefault');
        $post->save();

        $attributeValue = new AttributeValue;

        $attributeValue->attribute_id = Attributes::where('game_id', $request->input('flexRadioDefault'))->first()->id;
        $attributeValue->attribute_value = $request->input('attribute');
        $attributeValue->post_id = $post->id;
        $attributeValue->save();

        return redirect()->route('home');
    }

    public function filter(Request $request){
        $division = $request->input('division');

        $post_ids = AttributeValue::select('post_id')->where('attribute_value', $division)->get()->toArray();
        $posts = Post::whereIn('id', $post_ids)->get();

        return view('posts.index')->with('posts', $posts);
    }


}
