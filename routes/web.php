<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('home',[
        'home'=> Item::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/item', function () {
    return view('item');
});

Route::get('/item', [ItemController::class, 'index']);
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/item', [ItemController::class, 'store'])->name('items.store');