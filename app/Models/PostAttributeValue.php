<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Attributes;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostAttributeValue extends Model
{
    use HasFactory;

    protected $table = 'post_attribute_values';

    protected $fillable = ['post_id', 'attribute_id', 'attribute_value_id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function attribute(){
        return $this->belongsTo(Attributes::class);
    }

    public function attributeValue(){
        return $this->belongsTo(AttributeValue::class, 'attribute_value_id');
    }
}
