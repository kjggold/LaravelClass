<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Builder\Function_;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public Function likedPosts(){
        return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();
    }

    public function latestCommentThroughPost() {
        return $this->hasOneThrough(
            Comment::class,  // Final model (C)
            Post::class,     // Intermediate model (B)
            'customer_id',       // FK on posts table  posts.user_id
            'post_id',       // FK on comments table  comments.post_id
            'id',            // PK on users table
            'id'             // PK on posts table
        )->latestOfMany(); // get the latest comment
       }

       public function manyCommentThroughPost(){
            return $this->hasManyThrough(
                Comment::class,
                Post::class,
                'customer_id',
                'post_id',
                'id',
                'id'
    )->latest();
}

}
