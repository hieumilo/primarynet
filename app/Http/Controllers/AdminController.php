<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function user($lang)
    {
        app()->setLocale($lang);
        return view('user');
    }

    public function alluser()
    {
        $data = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.name as role')->get()->toArray();
        return response()->json($data);
    }

    public function saveRole(Request $request)
    {
        $userRole = Role::whereName($request->input('role'))->first();
        $user = User::find($request->input('id'));
        DB::table('role_user')
            ->where('user_id', '=', $user->id)
            ->delete();
        DB::table('role_user')
            ->insert([
                'user_id'=> $user->id,
                'role_id'=>$userRole->id
                ]);

        return response()->json($user);
    }
}
