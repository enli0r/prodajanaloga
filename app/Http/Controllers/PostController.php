<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Attributes;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use PDO;

class PostController extends Controller
{

    public function index(){

        $posts = Post::latest()->filter(request(['search', 'game']))->get();
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
        


        $attributes = $post->game->attributes;
       
        foreach($attributes as $attribute){
            $attributeValue = new AttributeValue;

            $attributeValue->attribute_id = $attribute->id;
            $attributeValue->post_id = $post->id;
            $attributeValue->attribute_value = $request->input($attribute->name);
            $attributeValue->save();
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


        return view('posts.edit')->with(compact('post', 'accountInfo', 'games'));
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
            $attributeValue = AttributeValue::where('attribute_id', $attribute->id)->where('post_id', $post->id)->first();
            $attributeValue->attribute_value = $request->input($attribute->name);
            $attributeValue->save();    
        }

        return redirect(route('posts.show', $post->title));
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
        $attributes = $post->game->attributes;
        $accountInfo = [];

        $accountInfo['title'] = $post->title;

        foreach($attributes as $attribute){
            $accountInfo[$attribute->name] = AttributeValue::where('post_id', $post->id)->where('attribute_id', $attribute->id)->value('attribute_value');
        }

        $accountInfo['description'] = $post->description;
        $accountInfo['price'] = $post->price;

        return $accountInfo;
    }
    
}
