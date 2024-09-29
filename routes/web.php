<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'role:super admin'])->group(function () {
    Route::get('/superAdmin/dashboard', function() { 
        return view('superAdmin.dashboard');
    })->name('superAdminDashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function() {
        return view('admin.dashboard');
    })->name('adminDashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function() { 
        return view('user.dashboard');
    })->name('userDashboard');
});

Route::get('/home', function() {
    return view('home');
})->name('home');


