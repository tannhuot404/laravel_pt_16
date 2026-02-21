<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'number'=>5
    ];
    return view('index', ['data'=>$data]);
}) -> name('home');

Route::get('/admin/v2/category', function() {
    return view('admin.category.index');
})->name('admin.category');