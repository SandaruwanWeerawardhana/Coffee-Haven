<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item
;

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
