<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $table = 'attribute_values';

    protected $fillable = ['attribute_value', 'attribute_id'];
    
    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function postAttributeValues(){
        return $this->hasMany(PostAttributeValue::class);
    }
    
}
