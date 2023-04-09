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
    public function product() {
        $products = DB::table('products')->get();
        return view('admin.product', compact('products'));
    }
    public function updateProduct(Request $req) {
        $tanggal = explode('-', $req->date_out);
        DB::table('products')
            ->where('id', $req->id)
            ->update([
                'range_sold' => $req->range_sold,
                'date_out' => mktime(12, 0, 0, $tanggal[1], $tanggal[2], $tanggal[0]),
            ]);
        return back();
    }
    public function inProduct() {
        $inProducts = DB::table('products')
                        ->where('range_sold', NULL)
                        ->leftJoin('citys', 'products.locations', '=', 'citys.id')
                        ->get();
        $citys = DB::table('citys')->get();
        return view('admin.in-product', compact('inProducts', 'citys'));
    }
    public function createInProduct(Request $req) {
        $tanggal = explode('-', $req->date_in);
        $namaFile = strtoupper(md5(time())).'.'.$req->image->getClientOriginalExtension();
        $folder = '../public/gambar';
        $req->image->move($folder, $namaFile);
        DB::table('products')
            ->insert([
                'name' => $req->name,
                'type' => $req->type,
                'image' => $namaFile,
                'year' => $req->year,
                'description' => $req->description,
                'range_ori' => $req->range_ori,
                'conditions' => $req->conditions,
                'locations' => $req->city,
                'date_in' => mktime(12, 0, 0, $tanggal[1], $tanggal[2], $tanggal[0]),
            ]);
        return back();
    }
    public function updateInProduct(Request $req) {
        $tanggal = explode('-', $req->date_in);
        DB::table('products')
            ->where('id', $req->id)
            ->update([
                'name' => $req->name,
                'type' => $req->type,
                'year' => $req->year,
                'description' => $req->description,
                'range_ori' => $req->range_ori,
                'conditions' => $req->conditions,
                'locations' => $req->city,
                'date_in' => mktime(12, 0, 0, $tanggal[1], $tanggal[2], $tanggal[0]),
            ]);
        return back();
    }
    public function deleteInProduct(Request $req) {
        unlink('../public/gambar/'.$req->image);
        DB::table('products')
            ->where('id', $req->id)
            ->delete();
        return back();
    }
    public function outProduct() {
        $outProducts = DB::table('products')
                        ->where('range_sold', '!=', NULL)
                        ->get();
        return view('admin.out-product', compact('outProducts'));
    }
    public function city() {
        $citys = DB::table('citys')->get();
        return view('admin.city', compact('citys'));
    }
    public function createCity(Request $req) {
        DB::table('citys')
            ->insert([
                'city' => $req->city
            ]);
        return back();
    }
    public function updateCity(Request $req) {
        DB::table('citys')
            ->where('id', $req->id)
            ->update([
                'city' => $req->city
            ]);
        return back();
    }
    public function deleteCity(Request $req) {
        DB::table('citys')
            ->where('id', $req->id)
            ->delete();
        DB::table('products')
            ->where('locations', $req->id)
            ->delete();
        return back();
    }
    public function galery() {
        $galerys = DB::table('galerys')->get();
        return view('admin.galery', compact('galerys'));
    }
    public function createGalery(Request $req) {
        $namaFile = strtoupper(md5(time())).'.'.$req->image->getClientOriginalExtension();
        $folder = '../public/galery';
        $req->image->move($folder, $namaFile);
        DB::table('galerys')
            ->insert([
                'file' => $namaFile,
            ]);
        return back();
    }
    public function deleteGalery(Request $req) {
        unlink('../public/galery/'.$req->image);
        DB::table('galerys')
            ->where('id', $req->id)
            ->delete();
        return back();
    }
}
