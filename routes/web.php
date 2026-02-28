<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'number' => 5
    ];
    return view('index', ['data' => $data]);
})->name('home');

Route::get('/admin/category', function () {
    $categories = Category::all();
    // return view('admin.category.index', ['categories' => $categories]);
    return view('admin.category.index', compact('categories'));
})->name('admin.category');

Route::get('/admin/create', function () {
    return view('admin.category.create');
})->name('admin.category.create');

Route::get('/admin/edit/{id}', function($id){
    $category = Category::find($id);
    return view('admin.category.create', compact('category'));
})->name('admin.category.edit');