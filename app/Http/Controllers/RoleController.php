<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function try(){
        return view('components.backend.layouts.try');
    }
    public function index()
    {
        $roles = Role::get();
        return view('backend.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('backend.roles.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Role::create([
            'role_name' => $request->role_name
        ]);
        return redirect()->route('roles.index');
    }

    public function show(Role $role)
    {
        return view('backend.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('backend.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update([
            'role_name' => $request->role_name
        ]);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        //
    }
}
