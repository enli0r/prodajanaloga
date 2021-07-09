<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Attributes;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Models\Game;
use App\Models\PostAttributeValue;
use Attribute;
use Illuminate\Support\Facades\Auth;
use PDO;

class PostController extends Controller
{

    public function index(){

        $posts = Post::latest()->filter(request(['search', 'game']))->get();
        $games = Game::all();
        $currentCategory = Game::where('name', request('game'))->first();

        foreach($posts as $post){
            $accountInfo[$post->id] = $this->getAccountInfo($post);
        }
        
        return view('posts.index')->with(compact('posts', 'games', 'currentCategory', 'accountInfo')); 
    }  
    
    public function create(){

        $divisions = AttributeValue::where('attribute_id', 1)->pluck('attribute_value');
        $servers = AttributeValue::where('attribute_id', 2)->pluck('attribute_value');
        $ranks = AttributeValue::where('attribute_id', 3)->pluck('attribute_value');

        return view('posts.create')->with(compact('divisions', 'ranks', 'servers'));
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
        
        $attributes = $post->game->attributes;

        foreach($attributes as $attribute){
 
            if($attribute->name == 'level'){
                $attributeValue = new AttributeValue;

                $attributeValue->attribute_id = $attribute->id;
                $attributeValue->attribute_value = $request->input($attribute->name);
                $attributeValue->save();
            }

            $attributeValue = AttributeValue::where('attribute_id', $attribute->id)->where('attribute_value', $request->input($attribute->name))->first();

            $postAttributeValue = new PostAttributeValue;
            $postAttributeValue->post_id = $post->id;
            $postAttributeValue->attribute_id = $attribute->id;
            $postAttributeValue->attribute_value_id = $attributeValue->id;
            $postAttributeValue->save();
        }

        return redirect()->route('posts');
    }
    
    public function show(Post $post){

        $accountInfo = $this->getAccountInfo($post);

        return view('posts.show')->with(compact('post', 'accountInfo'));
    }

    public function edit(Post $post){
        
        $accountInfo = $this->getAccountInfo($post);
        $games = Game::all();

        $divisions = AttributeValue::where('attribute_id', 1)->pluck('attribute_value');
        $servers = AttributeValue::where('attribute_id', 2)->pluck('attribute_value');
        $ranks = AttributeValue::where('attribute_id', 3)->pluck('attribute_value');


        return view('posts.edit')->with(compact('post', 'accountInfo', 'games', 'divisions', 'servers', 'ranks'));
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
        $post->save();

        $attributes = $post->game->attributes;

        foreach($attributes as $attribute){
            $postAttributeValue = PostAttributeValue::where('attribute_id', $attribute->id)->where('post_id', $post->id)->first();

            if($attribute->name == 'level'){
                $attributeValue = AttributeValue::find($postAttributeValue->attribute_value_id);
                $attributeValue->attribute_value = $request->input($attribute->name);
                $attributeValue->save();   

            }else{
                $postAttributeValue->attribute_value_id = AttributeValue::where('attribute_value', $request->input($attribute->name))->first()->id;
                $postAttributeValue->save();
            }



        }

        return redirect(route('posts.show', $post->id));
    }

    public function destroy($id){

         $post = Post::find($id);
         $attributeValues = $post->attributeValues;

         foreach($attributeValues as $value){
             $value->delete();
         }

         $post->delete();

         return redirect(route('posts'));
    }

    public function getAccountInfo(Post $post){
        $accountInfo = [];
        $accountInfo['title'] = $post->title;
        $accountInfo['username'] = $post->username;

        $postAttributeValues = $post->postAttributeValues;

        foreach($postAttributeValues as $postAttributeValue){
            $accountInfo[$postAttributeValue->attribute->name] = $postAttributeValue->attributeValue->attribute_value;
        }

        $accountInfo['description'] = $post->description;
        $accountInfo['price'] = $post->price;

        return $accountInfo;
    }
    
}
