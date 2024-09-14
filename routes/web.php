<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/users', 'admin.users')->name('admin.users');
Route::view('/admin/reports', 'admin.reports')->name('admin.reports');
Route::view('/admin/settings', 'admin.settings')->name('admin.settings');
Route::view('/admin/profile', 'admin.profile')->name('admin.profile');

