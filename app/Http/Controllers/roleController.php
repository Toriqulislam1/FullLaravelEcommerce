<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



use App\Models\catagory;
use App\Models\tag;


use Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class roleController extends Controller
{
    // role management
    function role(){
        $permission = Permission::all();
        $user = User::all();
        $role = role::all();
        $roles =role::all();


        return view('role_management.role',[
            'permissions'=>$permission,
            'users'=>$user,
            'role'=>$role,
            'roles'=>$role,
        ]);
    }


   function add_permission(Request $request){

    $permission = Permission::create(['name' => $request->name_permission]);

    return back()->with('add_permission', 'Permission added successfully');


   }


function role_store(Request $request){

    $role = Role::create(['name' =>$request->role_name]);

    $role->givePermissionTo($request->check);

    return back()->with('role_store','Role successfully add');
}


function role_assign(Request $request){

    $user = user::find($request->user_id);

    $user->assignRole($request->role_id);

    return back();


}



}
