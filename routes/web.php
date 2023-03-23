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
});


Route::get('/', function () {
    $active = 'home';
    return view('home', compact('active'));
});

Route::get('products', function () {
    $active = 'products';
    return view('products', compact('active'));
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
