<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin/dashboard');
    }
    public function userManagement() {
        $users = DB::table('users')
                    ->where('level', 'Admin')
                    ->get();
        return view('admin/user-management', compact('users'));
    }
    public function createUser(Request $req) {
        DB::table('users')
            ->insert([
                'username' => $req->username,
                'name' => $req->name,
                'level' => $req->level,
                'password' => md5($req->password),
            ]);
        return back();
    }
    public function updateUser(Request $req) {
        DB::table('users')
            ->where('id', $req->id)
            ->update([
                'name' => $req->name,
                'level' => $req->level,
            ]);
        return back();
    }
    public function deleteUser(Request $req) {
        DB::table('users')
            ->where('id', $req->id)
            ->delete();
        return back();
    }
}
