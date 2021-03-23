<?php

namespace App\Models;

use App\Models\Post;
use PhpParser\Node\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function attribute(){
        return $this->hasMany(Attribute::class);
    }

}
