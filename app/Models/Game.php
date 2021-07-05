<?php

namespace App\Models;

use App\Models\Post;
use PhpParser\Node\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function attributes(){
        return $this->hasMany(Attributes::class);
    }

}
