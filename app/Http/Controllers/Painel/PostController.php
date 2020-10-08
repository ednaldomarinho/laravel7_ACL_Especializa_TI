<?php

namespace App\Http\Controllers\Painel;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    private $post;
    
    function __construct(Post $post) {
        $this->post = $post;
    }
    
    
    public function index()
    {
       $posts = $this->post->all();
       return view('painel.posts.index', compact('posts')); 
    }
}
