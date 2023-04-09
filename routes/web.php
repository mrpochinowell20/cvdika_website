<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->middleware('login')->group(function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user-management', [AdminController::class, 'userManagement'])->name('user-management');
    Route::post('/user-management', [AdminController::class, 'createUser'])->name('create-user');
    Route::put('/user-management', [AdminController::class, 'updateUser'])->name('update-user');
    Route::delete('/user-management', [AdminController::class, 'deleteUser'])->name('delete-user');
    Route::get('/product', [AdminController::class, 'product'])->name('product');
    Route::put('/product', [AdminController::class, 'updateProduct'])->name('update-product');
    Route::get('/in-product', [AdminController::class, 'inProduct'])->name('in-product');
    Route::post('/in-product', [AdminController::class, 'createInProduct'])->name('create-in-product');
    Route::put('/in-product', [AdminController::class, 'updateInProduct'])->name('update-in-product');
    Route::delete('/in-product', [AdminController::class, 'deleteInProduct'])->name('delete-in-product');
    Route::get('/out-product', [AdminController::class, 'outProduct'])->name('out-product');
    Route::get('/city', [AdminController::class, 'city'])->name('city');
    Route::post('/city', [AdminController::class, 'createCity'])->name('create-city');
    Route::put('/city', [AdminController::class, 'updateCity'])->name('update-city');
    Route::delete('/city', [AdminController::class, 'deleteCity'])->name('delete-city');
    Route::get('/galery', [AdminController::class, 'galery'])->name('galery');
    Route::post('/galery', [AdminController::class, 'createGalery'])->name('create-galery');
    Route::delete('/galery', [AdminController::class, 'deleteGalery'])->name('delete-galery');
});


Route::get('/', function () {
    $active = 'home';
    return view('home', compact('active'));
});

Route::get('products', function () {
    $active = 'products';
    $citys = DB::table('citys')->get();
    $products = DB::table('products')
                    ->where('range_sold', NULL)
                    ->leftJoin('citys', 'products.locations', '=', 'citys.id')
                    ->get();
    return view('products', compact('active', 'citys', 'products'));
});

Route::get('about', function () {
    $active = 'about';
    return view('about', compact('active'));
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authLogin'])->name('auth-login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('change-password', [LoginController::class, 'changePassword'])->name('change-password');
Route::put('change-password', [LoginController::class, 'authChangePassword'])->name('auth-change-password');
