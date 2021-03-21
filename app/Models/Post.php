<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function game(){
        dd($this->hasOne(Game::class)->toSql());
        return $this->hasOne(Game::class);
    }
}
