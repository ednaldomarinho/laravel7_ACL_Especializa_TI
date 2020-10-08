<?php

namespace App\Http\Controllers\Painel;

use App\Post;
use App\Role;
use App\User;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index()
    {   
        $totalUsers = User::count();
        $totalPosts = Post::count();
        $totalRoles = Role::count();
        $totalPermissions = Permission::count();
        
        return  view('painel.home.index', compact('totalUsers', 'totalPosts', 'totalRoles', 'totalPermissions'));
    }
}
