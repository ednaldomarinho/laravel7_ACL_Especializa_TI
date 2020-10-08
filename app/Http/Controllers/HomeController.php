<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $post)
    {
        //$posts = $post->where('user_id', auth()->user()->id)->get();
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    public function update($idPost)
    {
        $post = Post::find($idPost);
        //$this->authorize('update-post', $post);
        if (Gate::denies('update-post', $post)) {
            abort(403, 'Não autorizado');
        }
        return view('post-update', compact('post'));
    }

    public function rolesPermissions()
    {
        $nameUser = auth()->user()->name;
        echo "<h1>$nameUser</h1>";
        foreach (auth()->user()->roles as $role) {
            echo "<b>$role->name</b> -> ";
            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
            echo " $permission->name , <br>";
            
            }
            echo "<hr>";
        }
        
    }
}