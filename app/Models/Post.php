<?php

namespace App\Models;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title', 'description', 'username', 'price', 'game_id'];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }

    public function game(){
        return $this->hasOne(Game::class, 'game_id');
    }

    public function attributeValue(){
        return $this->hasManny(AttributeValue::class);
    }
} 
