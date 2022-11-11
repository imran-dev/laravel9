<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backend.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();
        return view('backend.pages.roles.create', compact('permissions', 'permission_groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.required' => 'Please give a role name'
        ]);

        $role        = Role::create(['name' => $request->input('name')]);
        $permissions = $request->input('permissions');
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
