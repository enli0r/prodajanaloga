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
        return $this->belongsTo(User::class);
    }

    public function game(){
        return $this->belongsTo(Game::class);
    }

    public function attributeValues(){
        return $this->hasMany(AttributeValue::class);
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn($query, $search)=>
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
        );


        $query->when($filters['game'] ?? false, fn($query, $game)=>
            $query
                ->whereHas('game', fn($query)=>
                    $query->where('name', $game)
            )
        );
    }

} 
