<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Customer;

class PostController extends Controller
{
    // SELECT users.name FROM users INNER JOIN posts ON users.id = posts.user_id where posts.id = 3;
    public function postList(){

        // $user = Customer::with('posts')->find(2);
        // $posts = $user->posts;
        // dd($posts);

        // $customer_posts  = Customer::find(3)->posts;
        // dd($customer_posts);

        $customer_posts=Customer::find(2)->posts;
        $customer_post_title=[];
        foreach($customer_posts as $customer_post){
            $customer_post_title[]=$customer_post->title;
        }
        dd($customer_post_title);
    }
}