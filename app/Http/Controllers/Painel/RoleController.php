<?php

namespace App\Http\Controllers\Painel;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    private $role;
    
    function __construct(Role $role) {
        $this->role = $role;
    }
    
    
    public function index()
    {
       $roles = $this->role->all();
       return view('painel.roles.index', compact('roles')); 
    }

    public function permissions($id)
    {
        $role = $this->role->find($id);
        $permissions = $role->permissions;
        return view('painel.roles.permissions', compact('role', 'permissions')); 
    }
}