<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use App\Models\User;
use App\Models\Attributes;
use Illuminate\Http\Request;
use PhpParser\Node\Attribute;
use App\Models\AttributeValue;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        $attributes = Attributes::all();
        $attributeValues = AttributeValue::all();

        return view('posts.index')->with(compact('posts', 'attributes', 'attributeValues'));
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
        ]);
 
        $post = new Post;

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->username = $request->input('username');
        $post->price = $request->input('price');
        $post->user_id = Auth::user()->id;
        $post->game_id = $request->input('submit');
        $post->save();

        $game_id = $request->input('submit');
        $attributes = Attributes::where('game_id', $game_id)->get();

        foreach($attributes as $attribute){
            $attributeValue = new AttributeValue;

            $attributeValue->attribute_id = $attribute->id;
            $attributeValue->post_id = $post->id;
            $attributeValue->attribute_value = $request->input($attribute->name);
            $attributeValue->save();
        }

        return redirect()->route('posts');
    }

    public function filter(Request $request){
        $division = $request->input('division');

        $post_ids = AttributeValue::select('post_id')->where('attribute_value', $division)->get()->toArray();
        $posts = Post::whereIn('id', $post_ids)->get();

        return view('posts.index')->with('posts', $posts);
    }

    public function show($id){
        $post = Post::find($id);
        $attributes = Attributes::where('game_id', $post->game_id)->get();

        $accountInfo = [];

        $accountInfo['title'] = $post->title;
        $accountInfo['username'] = $post->username;

        foreach($attributes as $attribute){
            $accountInfo[$attribute->name] = AttributeValue::where('post_id' , $id )->where('attribute_id', $attribute->id)->value('attribute_value');
        }

        $accountInfo['description'] = $post->description;
        $accountInfo['price'] = $post->price;

        $user = User::where('id', $post->user_id)->first();
        

        return view('posts.show')->with(compact('post', 'accountInfo', 'user'));
    }

    public function edit($id){
        $post = Post::find($id);
        $game_id = $post->game_id;
        $attributes = Attributes::where('game_id', $game_id)->get();

        $attr_attrVal = [];

        foreach($attributes as $attribute){
            $attr_attrVal[$attribute->name] = AttributeValue::where('attribute_id', $attribute->id)->where('post_id', $post->id)->value('attribute_value');
        }

        return view('posts.edit')->with(compact('post', 'attr_attrVal'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'username' => 'required',
            'price' => 'required',
        ]);

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->username = $request->input('username');
        $post->price = $request->input('price');
        $post->game_id = $request->input('submit');
        $post->save();

        $game_id = $request->input('submit');
        $attributes = Attributes::where('game_id', $game_id)->get();


        foreach($attributes as $attribute){
            $attributeValue = AttributeValue::where('attribute_id', $attribute->id)->where('post_id', $post->id)->first();
            $attributeValue->attribute_value = $request->input($attribute->name);
            $attributeValue->save();    
        }

        return redirect(route('posts.show', $id));
    }


    //DELETE
    public function destroy($id){
         $post = Post::find($id);
         $attributeValues = AttributeValue::where('post_id', $post->id)->get();

         foreach($attributeValues as $value){
             $value->delete();
         }

         $post->delete();

         return redirect(route('posts'));
    }


}
