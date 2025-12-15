<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title'];//can insert ,update
    protected $guarded = ['category_id'];//can't insert , update
    //protected $guarded = []; allow all permissions
}
