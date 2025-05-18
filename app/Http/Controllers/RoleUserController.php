<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleUserController extends Controller
{
    public function index()
    {
        $data = DB::table('role_user')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.id as user_id', 'users.name as user_name', 'roles.id as role_id', 'roles.name as role_name', 'role_user.created_at', 'role_user.updated_at')
            ->get();

        return response()->json($data);
    }
}
