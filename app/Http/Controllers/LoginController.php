<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login() {
        if (Session::get('login')) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('login');
        }
    }
    public function authLogin(Request $req) {
        $user = DB::table('users')
                ->where('username', $req->username)
                ->where('password', md5($req->password));
        if ($user->count() != 0) {
            $user = $user->first();
            Session::put('username', $user->username);
            Session::put('name', $user->name);
            Session::put('level', $user->level);
            Session::put('password', $user->password);
            Session::put('login', TRUE);
            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }
    public function logout() {
        Session::flush();
        return redirect()->route('login');
    }
    public function changePassword() {
        return view('admin.change-password');
    }
    public function authChangePassword(Request $req) {
        $user = DB::table('users')
                    ->where('username', Session::get('username'))
                    ->where('password', md5($req->password1));
        if ($user->count() != 0) {
            if ($req->password2 == $req->password3) {
                $user->update([
                    'password' => md5($req->password3)
                ]);
                return redirect()->route('logout');
            }
        }
        return back();
    }
}
