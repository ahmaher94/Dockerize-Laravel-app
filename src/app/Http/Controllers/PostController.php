<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(){
        if(Cache::store('redis')->get('posts')){
            echo "from cache";
            $posts = Cache::store('redis')->get('posts');
        }else{
            echo "not from cache";
            $posts = Post::all();
            Cache::store('redis')->put('posts', $posts, 60);
        }
        return $posts;
    }

    public function show(Post $post){
        return $post;
    }
}
