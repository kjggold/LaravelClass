<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Post;


class LikeController extends Controller
{
    public function showLikedPosts(){
        //USING CUSTOMER TABLE <<
        $customer= Customer::find(2);//get user 1
        $likedPosts=$customer->likedPosts()->get();//get all liked posts

        $title=[];
        foreach($likedPosts as $post){
            echo $post->title."<br>";
            $title[]=$post->title;
        }
        dd($title);

        //USING POST TABLE <<
        $post=Post::find(4);//get post 2

        //get all customers who like posts
        $likers=$post->likers()->get();

        foreach($likers as $customer){
            echo ($customer->name ."<br>");
        }


    }
}
