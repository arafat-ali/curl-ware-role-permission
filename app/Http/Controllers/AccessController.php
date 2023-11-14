<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AccessController extends Controller
{
    public function showEditAccessForm(){
        return view('admin.editAccess');
    }

    public function roles(){
        $roles = Role::with('permissions')->get();
        return view('admin.roles', ["data" =>$roles]);
    }

    public function createRoleWithPermission(Request $request){

    }


}
