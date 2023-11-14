<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\CreateRoleWithPermissionFormRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
class AccessController extends Controller
{
    public function showRole($name){
        $role = Role::with('permissions')->where('name',$name)->first();
        return view('admin.showRole', ["data" =>$role]);
    }

    public function roles(){
        $roles = Role::with('permissions')->get();
        return view('admin.roles', ["data" =>$roles]);
    }

    public function createRoleWithPermission(){
        $permissions = Permission::all();
        return view('admin.createRole', ["data" => $permissions]);
    }

    public function postRoleWithPermission(CreateRoleWithPermissionFormRequest $request):RedirectResponse{
        if(Role::create(['name' => $request->name])->givePermissionTo($request->permission)){
            return redirect()->route('roles')->with('message', 'Role with permission create successful');
        }
        return back()->withInput()->withErrors(['massage'=> "Something happened bad"]);
    }

    public function assignRoleToUser($userId){
        $user = User::where('id', $userId)->first();
        $roles = Role::with('permissions')->get();
        return view('admin.assignRole', ["roles" =>$roles, "user"=> $user]);
    }

    public function postRoleToUser(Request $request, $userId):RedirectResponse{

        $user = User::where('id', $userId)->first();
        $user->syncRoles([$request->role]);
        return redirect()->route('users')->with('message', 'Role assigning to user successful');
    }

}
