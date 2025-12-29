<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function likers()
{
    return $this->belongsToMany(Customer::class, 'post_user_likes')->withTimestamps();
}
}
