<?php

namespace App\Http\Controllers\Security;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermission extends Controller
{
    public function index(Request $request)
    {
        $titleSubHeader = "Roles y permisos";
        $descriptionSubHeader = "Listado de roles y permisos";

        $roles = Role::get();
        $permissions = Permission::get();
        return view('role-permission.permissions', compact('roles', 'permissions', 'titleSubHeader', 'descriptionSubHeader'));
    }

    public function store(Request $request)
    {
        //code here
    }
}
